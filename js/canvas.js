let diffuse;
let masked;
let mask;

let typeBase;
let typeBlur;
let typeDiffuse;
// let typeWarp;
let previewSize = 800;
let noiseMax = 5;
let noisePhase = 0;

// console.log("CANVAS");

function preload() {
	typeBase = loadImage('assets/NORMAL-text-base.png');
	typeDiffuse = loadImage('assets/NORMAL-text-diffuse.png');
	imageFill = loadImage('assets/vinicius-amnx-amano-f9oQZOk9vnk-unsplash.png');
}

function setup() {
	createCanvas(window.innerWidth, window.innerHeight*1.5);
	content = createGraphics(window.innerWidth, window.innerHeight*1.5);
	mask = createGraphics(window.innerWidth, window.innerHeight*1.5);
 	masked = createImage(content.width, content.height);
 	t = 1.2;
}

function draw() {

	clear();
	image(typeDiffuse, width/2-(typeBase.width/2),  height/3-(typeBase.height/2));

	mask.clear();
	// mask.background(255);
	mask.fill(0);

	previewSize = map(mouseY,height/3,height,800,0);

	// https://www.youtube.com/watch?v=ZI1dmHv3MeM&ab_channel=TheCodingTrain
	mask.beginShape();
	for (let i = 0; i < TWO_PI; i+=0.5) {
		// var ang = map(i, 0, 200, 0, TWO_PI);
		// var rad = 600 * noise(i * 0.01, t * 0.05);
		let xoff = map(cos(i+noisePhase),-1,1,0,noiseMax); 
		let yoff = map(sin(i+noisePhase),-1,1,0,noiseMax);
		let rad = map(noise(xoff, yoff), 0, 1, previewSize/5, previewSize/2);
		// let rad = 300 * noise(xoff, yoff);
		let x = rad * cos(i);
		let y = rad * sin(i);
		mask.curveVertex(mouseX+x, mouseY+y);
	}
	mask.endShape(CLOSE);
	noisePhase += 0.02;


	content.background(173, 31, 37);
	content.image(imageFill, 0, 0, width, height);
	content.image(typeBase, width/2-(typeBase.width/2), height/3-(typeBase.height/2));

	masked.copy(content, 0, 0, content.width, content.height, 0, 0, content.width, content.height);
	masked.mask(mask);

	// image(mask, 0, 0);
	image(masked, 0, 0);
	// copy(img, mouseX-(previewSize/2), mouseY-(previewSize/2), previewSize, previewSize, mouseX-(previewSize/2), mouseY-(previewSize/2), previewSize, previewSize);

} 

  //Draw the offscreen buffer to the screen with image()
  // int tilesX = 16;
  // int tilesY = 16;

  // int tileW = int(width/tilesX);
  // int tileH = int(height/tilesY);

  // for (int y = 0; y < tilesY; y++) {
  //   for (int x = 0; x < tilesX; x++) {

  //     // WARP
  //     int wave = int(sin(frameCount * 0.05 + ( x * y ) * 0.07) * 100);

  //     // SOURCE
  //     int sx = x*tileW + wave;
  //     int sy = y*tileH;
  //     int sw = tileW;
  //     int sh = tileH;


  //     // DESTINATION
  //     int dx = x*tileW;
  //     int dy = y*tileH;
  //     int dw = tileW;
  //     int dh = tileH;

  //     copy(diffuse, sx, sy, sw, sh, dx, dy, dw, dh);

  //   }
  // }