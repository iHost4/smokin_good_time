<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: index.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('smokin_good_time_db.php'); // Make sure this file connects to your DB correctly
    
    // Sanitize and collect form inputs
    $user_name       = $_SESSION['user_name']; // from session, no need to sanitize
    $res_date        = filter_input(INPUT_POST, 'res_date', FILTER_SANITIZE_STRING);
    $hour            = filter_input(INPUT_POST, 'hour', FILTER_VALIDATE_INT);
    $minute          = filter_input(INPUT_POST, 'minute', FILTER_VALIDATE_INT);
    $ampm            = filter_input(INPUT_POST, 'ampm', FILTER_SANITIZE_STRING);
    $num_of_guests   = filter_input(INPUT_POST, 'num_of_guests', FILTER_VALIDATE_INT);
    $table_type      = filter_input(INPUT_POST, 'table_type', FILTER_SANITIZE_STRING);
    
    // Combine hour, minute, and AM/PM into a formatted time string (e.g., "01:30 PM")
    $res_time = sprintf('%02d:%02d %s', $hour, $minute, $ampm);
    
    // Map table type to ID and seating capacity
    $table_map = [
        'booth' => ['id' => 1, 'capacity' => 5],
        'window' => ['id' => 2, 'capacity' => 5],
        'outdoor' => ['id' => 3, 'capacity' => 20]
    ];
    
    // Validate that the table_type exists in the map
    if (!array_key_exists($table_type, $table_map)) {
        echo "Invalid table type.";
        exit;
    }
    
    $table_id = $table_map[$table_type]['id'];
    $seating_capacity = $table_map[$table_type]['capacity'];
    
    try {
        // Insert reservation
        $insert_res = 'INSERT INTO reservation (user_name, res_date, num_of_guests, res_time) 
                       VALUES (:user_name, :res_date, :num_of_guests, :res_time)';
        $stmt = $db->prepare($insert_res);
        $stmt->execute([
            ':user_name'     => $user_name,
            ':res_date'      => $res_date,
            ':num_of_guests'  => $num_of_guests,
            ':res_time'      => $res_time
        ]);
    
        // Get the auto-generated res_id
        $res_id = $db->lastInsertId();
    
        // Insert into seating_arrangement
        $insert_seating = 'INSERT INTO seating_arrangement (table_id, res_id, table_type, seating_capacity) 
                           VALUES (:table_id, :res_id, :table_type, :seating_capacity)';
        $stmt2 = $db->prepare($insert_seating);
        $stmt2->execute([
            ':table_id'         => $table_id,
            ':res_id'           => $res_id,
            ':table_type'       => $table_type,
            ':seating_capacity' => $seating_capacity
        ]);
    
        $res_msg="Reservation successfully made!";
        echo "Reservation successfully made!";
        // Optional redirect
        // header("Location: confirmation.php");
        // exit;
    
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation</title>
    <link rel="stylesheet" href="css/reservation.css">
</head>
<body>
    <div class="reservation-form">
        <h2>Table Reservation</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <input type="hidden" id="user_name" name="user_name" value="<?php echo $_SESSION['user_name']; ?>">
            </div>
            <div class="form-group">
                <label for="res_date">Reservation Date:</label>
                <input type="date" id="res_date" name="res_date" required>
            </div>
            <div class="form-group">
                <label for="res_time">Reservation Time:</label>
                <div style="display: flex; gap: 5px;">
                    <select id="hour" name="hour" required>
                        <?php for ($i = 11; $i <= 12; $i++) echo "<option value='$i'>$i</option>"; ?>
                        <?php for ($i = 1; $i <= 9; $i++) echo "<option value='$i'>$i</option>"; ?>
                    </select>
                    <select id="minute" name="minute" required>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <select id="ampm" name="ampm" required>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
                <div class="error" id="timeError">Reservations are only available between 11 AM and 9 PM.</div>
            </div>
            <div class="form-group">
                <label for="num_of_guests">Number of Guests:</label>
                <input type="number" id="num_of_guests" name="num_of_guests" min="1" max="20" required> 
            </div>
            <div id="tableTypeSection" class="form-group hidden">
                <label for="table_type">Table Type:</label>
                <select id="table_type" name="table_type">
                    <option value="booth">Booth</option>
                    <option value="window">Window</option>
                    <option value="outdoor">Outdoor</option>
                </select>
            </div>
            <button type="submit">Reserve</button>
        </form>
        <div id="back_signout">
            <a href="menu.php">Back to menu</a>
            <a href="sign_out.php">Sign out</a>
        </div>
    </div>

    <script>
        //validation of time input
        function validateTime() {
            const hour = parseInt(document.getElementById('hour').value);
            const ampm = document.getElementById('ampm').value;
            const errorDiv = document.getElementById('timeError');
            const submitBtn = document.getElementById('submitBtn');

            let militaryHour = hour;
            if (ampm === 'PM' && hour !== 12) militaryHour += 12;
            if (ampm === 'AM' && hour === 12) militaryHour = 0;

            let isValid = militaryHour >= 11 && militaryHour <= 20;

            if (!isValid) {
                errorDiv.style.display = 'block';
                submitBtn.disabled = true;
            } else {
                errorDiv.style.display = 'none';
                submitBtn.disabled = false;
            }
        }

        document.getElementById('hour').addEventListener('change', validateTime);
        document.getElementById('ampm').addEventListener('change', validateTime);

        document.getElementById('num_of_guests').addEventListener('change', function() {
            document.getElementById('tableTypeSection').classList.remove('hidden');
        });
    </script>
</body>
</html>
