// PRESS SPACE TO SNAP IMAGE

var one, shiftview, numview;
var curframe = 1;
var frames = [26];
var framesFilled = [26];
var shiftHeld = false;

function setup() {
  createCanvas(320,240);
  one = createGraphics(320,240);
  shiftview = createGraphics(320,240);
  numview = createGraphics(320,240);
  
  
  for (i=0;i<26;i++) {
    frames[i] = createGraphics(320,240);
  }
   for (i=0;i<26;i++) {
    framesFilled[i] = false;
  }
  
  capture = createCapture(VIDEO);
  capture.hide();
  
}

function draw() {
  image(capture,0,0,320,240);
  image(frames[curframe],0,0,320,240);
  image(shiftview,0,0,320,240);
  image(numview,0,0,320,240);
  
  
        // DRAW NUMBRO
  numview.clear();
  numview.textSize(24);
  if (!framesFilled[curframe]) {
    numview.fill(255,0,0);
  } else if (framesFilled[curframe]) {
    numview.fill(0,255,0);
  }
  numview.text(String.fromCharCode(curframe + 65),20,20,60,50);
  
  if(shiftHeld) {
    shiftview.ellipse(30,30,50,50);
  }
  
}

function keyPressed() {
  if(keyCode === 8) { // C TO CLEAR
    frames[curframe].clear();
    framesFilled[curframe] = false;
  }
  if(keyCode === 16) { // SHIFT TO MAKE CIRCLE
    shiftHeld = true;
  }
  for(n=65;n<=90;n++) { // NUMBROS
    if(keyCode === n) {
      // ASSIGN TO FRAME
      if(shiftHeld) {
        frames[n-65].image(capture,0,0,320,240);
        framesFilled[n-65] = true;
      }
      curframe = n-65;
    }
  }
}

function keyReleased() {
  if(keyCode === 16) { // SHIFT
    shiftHeld = false;
    shiftview.clear();
  }
}
