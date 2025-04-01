<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f8f8f8;
        }
        .reservation-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
            align-items: center;
        }
        label {
            display: block;
            font-weight: bold;
        }
        select, input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .hidden {
            display: none;
        }
        .error {
            color: red;
            font-size: 14px;
            display: none;
        }
        button {
            background: #e67e22;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="reservation-form">
        <h2>Table Reservation</h2>
        <form action="process_reservation.php" method="post">
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
                <input type="number" id="num_of_guests" name="num_of_guests" min="1" required>
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
    </div>

    <script>
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
