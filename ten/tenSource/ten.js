// FUNCTIONS:
// Keycode handling
function keyPressed() {
  if(keyCode != 32) {
    if(keyCode >= 48 /*0*/ || keyCode < 48 + nFrames) {
      currentFrame = keyCode - 48;
    }
  }
  if(keyCode == 32 && !playing) {
    playing = true;
  } // UNCOMMENT the following if you want to be able to press space again to stop. 
  else if (keyCode == 32) {
    playing = false;
  }
}
function keyReleased() {
}
// My Functions
// FrameClamp makes sure currentFrame stays between zero and nine.
function FrameClamp() {
  if(currentFrame < 0) {
    currentFrame = 0;
  }
  if(currentFrame > nFrames) {
    currentFrame = nFrames;
  }
}

function Play() {
  
  if(startPlay) {
    // currentFrame = 0;
    playing = true;
    startPlay = false;
  }
  
  if(playing) {
    if(frameCounter < frameInterval) {
      ++frameCounter;
    } else {
      frameCounter = 0;
      
      if(currentFrame < nFrames) {
        currentFrame += 1;
      } else {
        currentFrame = 0;
        // uncomment "playing = false", and the animation won't loop- it'll stop at zero i think. 
        // So if you want to make one where things play once when you press, you could just leave the [0] blank- that way it'll play once and disappear.
        // OR you could have a still/idle frame as zero. Like a face and when you press play it does something.
        
        // playing = false;
      }
    }
  }
  
}
// COLOR VARS go here:
let r,g,b;

function Paint() {
  r+=3;
  g+=1;
  b-=3;
  if(r>=255) {
    r = 100;
  }
  if(g>=255) {
    g = 100;
  }
  if(b<=100) {
    b = 255;
  }
  
  frame[currentFrame].stroke(b,g,r);
  frame[currentFrame].fill(r,g,b);
  
  if(mouseIsPressed) {
    frame[currentFrame].ellipse(mouseX,mouseY,brushSize,brushSize/2);
  }
}
// initialize
let width, height;
let currentFrame = 0;
let brushSize = 20;
// let canDraw = true;

let frame = [];
let nFrames = 9; // includes 0. so in total, 10.
let frameInterval = 4;
let frameCounter = 0;

let startPlay = true;
let playing = false;
let playCounter = 0;

function setup() {
  width = 320;
  height = 240;
  r=255;
  g=100;
  b=130;

  createCanvas(width, height);
  // set black first? maybe this is helpful for debug? idfk
  background(0);
  // always initialize them in Setup, but declare outside. ("Ingo's Style")
  for(let i=0; i<=nFrames; ++i) {
    frame[i] = createGraphics(width,height);
  }
}

function draw() {
  
  Play();
  FrameClamp();
  Paint();
  
  // press space to play.
  
	
  background(90,240,90);
  image(frame[currentFrame],0,0);
	
  fill(0,0,255);
  textSize(50);
  text(String(currentFrame),10,45);
	
}



