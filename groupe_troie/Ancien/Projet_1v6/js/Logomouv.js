let x;
let y;

let xspeed;
let yspeed;

let logo;

function preload() {
    logo = loadImage("jurassicParkLogo.png");  
}

function setup() {
    createCanvas(800,600);
    x = random(width);
    y= random(height);
    xspeed = 10;
    yspeed = 10;

}

function draw() {
    background(0);
    image(logo, x, y, 80, 60);

    x = x + xspeend;
    y = y + yspeed;

    if (x + logo.width >= width) {
        xspeed = -xspeed;
        x = width - logo.width;
    } else if (x <= 0) {
        xspeed = -xspeed;
        x = 0;
    }

    if (y + logo.height >= height) {
        yspeed == -yspeed;
        y = height - logo.height;
    } else if (y <= 0) {
        yspeed = -yspeed;
        y = 0;
    }
}

