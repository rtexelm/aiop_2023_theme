//intialize canvas
let canvas = document.getElementById("header");
let c = canvas.getContext("2d");
width = window.innerWidth;
height = window.innerHeight;
canvas.width = width;
canvas.height = height;
let mouseX = width/2; 
let mouseY = height/2;
let fillShape = true; 
let strokeShape = true; 

let points = 3;
let radius = 400;

window.onload = function(){
	
	// startInterval();
	c.fillStyle = '#D72027';
	c.strokeStyle = '#ff0000';
	c.rect(300,300,300,300);

	// Tangential lines
	// c.beginPath();
	// c.strokeStyle = 'gray';
	// c.moveTo(200, 20);
	// c.lineTo(200, 130);
	// c.lineTo(50, 20);
	// c.stroke();

	// // Arc
	// c.beginPath();
	// c.strokeStyle = 'red';
	// c.lineWidth = 5;
	// c.moveTo(200, 20);
	// c.arcTo(200,130, 50,20, 40);
	// c.stroke();

	// c.beginPath();
	// c.fillStyle = 'blue';
	// c.arc(200, 20, 5, 0, 2 * Math.PI);
	// c.fill();

	// // Control points
	// c.beginPath();
	// c.fillStyle = 'red';
	// c.arc(200, 130, 5, 0, 2 * Math.PI); // Control point one
	// c.arc(50, 20, 5, 0, 2 * Math.PI);   // Control point two
	// c.fill();

	let x = width/2; 
	let y = height/2;
	// let px, py;
	c.beginPath();
	// c.moveTo(x, y);
	// c.arcTo(x,y-radius, x+radius-200,y, 200);
	for (let i = 1; i < points+1; i++) {
		let angle = 360/points * i;
		let pAngle = 360/points * (i-1);
		// px = width/2 + radius * Math.sin(degrees(angle));
		// py = height/2 + radius * Math.cos(degrees(angle));
		x = width/2 + radius * Math.sin(degrees(pAngle));
		y = height/2 + radius * Math.cos(degrees(pAngle));
		c.quadraticCurveTo(x+random(-100,100), y+random(-100,100),x, y);
		// c.arcTo(px,py, x,y, 40);
	}
	// c.closePath();
	c.stroke();
	c.fill();

};

// var startInterval = function(){
//   setInterval(function(){

// 	// c.clearRect(0,0,canvas.width,canvas.height);
// 	c.beginPath();
// 	// c.moveTo(center.x, center.y);
// 	// c.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );
// 	// c.quadraticCurveTo(p1.x, p1.y, xc, yc);
// 	c.fillStyle = '#ff0000';

// 	c.strokeStyle = "black";
// 	c.fillStyle = "cyan";
// 	c.lineCap = "round";
// 	c.lineJoin = "round";
// 	c.lineWidth = 2;

// 	c.rect(300,300,300,300);

//     // portal.update();
//     // portal.draw();

//   }, 50);
// };
// startInterval();


// support functions
// function Portal(x,y,w,h){
// 	Component.call(this, x, y, w, h);
// 	this.w = (width > height)? height*0.3 : width*0.3; 
// 	this.h = this.w; 


// }

// Portal.prototype.update = function(){
// 	this.w+=5;
// 	this.h+=5;
// };

// Portal.prototype.draw = function(){
// 	let pw = this.w;
// 	let ph = this.h;

// };





// let resize = function() {
//     canvas.width = window.innerWidth;
//     canvas.height = window.innerHeight;
//   }
//   window.addEventListener('resize', resize);
//   resize();

// document.onmousemove = function(e){
// 	mouseX = e.clientX;
// 	mouseY = e.clientY;
// };
// document.onmouseleave = function(e){
// 	mouseX = -200;
// 	mouseY = -200;
// };

let random = function(min, max, r){
	if(r === undefined) r = true;
	let rand; 
	if(r){
		rand = Math.round( Math.random()*(max-min)+min );
	}else{
		rand = Math.random()*(max-min)+min;
	}
	return rand;
};

// let map = function(num, minIN, maxIN, minOUT, maxOUT) {
//   return (num - minIN) * (maxOUT - minOUT) / (maxIN - minIN) + minOUT;
// };

let degrees = function(d){
	return d * Math.PI/180;
};