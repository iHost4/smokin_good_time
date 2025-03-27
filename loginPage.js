const images = [
    'Images/food1.jpg',
    'Images/food2.jpg',
    'Images/food3.jpg'
];

let currentImage = 0

const changeImage = () =>{
    currentImage = (currentImage + 1) % images.length
    document.querySelector('.images').src = images[currentImage]

    //setTimeout(currentImage, 3000)
}
setInterval(changeImage, 3000)

/*
//hover over image to stop the loop
const pauseImage = () =>{
    clearInterval(changeImage)
}

const imageHolder = document.querySelector('.images')
document.querySelector('.images').addEventListener('mouseover', pauseImage)
document.querySelector('.images').addEventListener('mouseout', changeImage)
*/