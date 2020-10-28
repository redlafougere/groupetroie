let x;
let y;
let canvas;
let xspeed;
let yspeed;

let jura;

function preload() {
    jura = loadImage("https://i.ibb.co/HDT33Zg/Jurassic-Park-Logo.png");  
}

function setup() {
    canvas = createCanvas(windowWidth, windowHeight);
    x = random(width);
    y = random(height);
    xspeed = 5;
    yspeed = 5;
    canStyle = canvas.style;
    
    canvascss = document.getElementById('canvascss');
    canvas.parent(canvascss);
    

}

function draw() {
    background("transparent");
    image(jura, x, y);

    x = x + xspeed;
    y = y + yspeed;

    if (x + jura.width >= width) {
        xspeed = -xspeed;
        x = width - jura.width;
    } else if (x <= 0) {
        xspeed = -xspeed;
        x = 0;
    }

    if (y + jura.height >= height) {
        yspeed = -yspeed;
        y = height - jura.height;
    } else if (y <= 0) {
        yspeed = -yspeed;
        y = 0;
    }
}

