var width, height, center, radius;
var points = 12;
var smooth = true;
var path = new Path();
path.fillColor = '#D72027';
initializePath();

function initializePath() {
	center = view.center;
	width = view.size.width;
	height = view.size.height;
	radius = (width > height)? height*0.3 : width*0.3; 
	path.segments = [];

	for (var i = 0; i < points; i++) {

		var radians = (i*(360/points)) * (Math.PI/180);
		var xPos = center.x + (radius+(Math.random()*200))*Math.sin(radians);
		var yPos = center.y + (radius+(Math.random()*200))*Math.cos(radians);
		console.log(xPos, yPos);
		var point = new Point(xPos, yPos);
		path.add(point);
	}
	// path.fullySelected = true;
	path.closed = true;
	path.smooth({ type: 'continuous' });
}