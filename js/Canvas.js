/* var canvas = document.getElementById('myCanvas');
var context = canvas.getContext('2d'); */
var Rectangles = [];

var draw = function (context, x, y, width, height,linewidth, strokestyle) {
	context.beginPath();
	context.lineWidth=linewidth;
	context.strokeStyle="rgba(255, 255, 255, 0)";
	//context.fillStyle = "rgba(255, 255, 255, 0.5)";
	context.rect(x, y, width, height);
	context.stroke();	
};

var Rectangle = function(x, y, width,height) {
	this.left = x;
    this.top = y;
    this.right = x + width;
    this.bottom = y + height;
};


var drawRectangle = function (context, x, y, width, height, linewidth, strokestyle) {
    draw(context, x, y, width, height,linewidth, strokestyle);
    var Rectangle1 = new Rectangle(x, y, width,height);
    Rectangle1.cursor = "pointer";
    Rectangles.push(Rectangle1);  
};