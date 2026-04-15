(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


// symbols:



(lib._01logo = function() {
	this.initialize(img._01logo);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,434,118);


(lib._02btnknowmore = function() {
	this.initialize(img._02btnknowmore);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,468,140);


(lib._03verification = function() {
	this.initialize(img._03verification);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,334,96);


(lib._04bulgar = function() {
	this.initialize(img._04bulgar);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,392,174);


(lib._05apprehension = function() {
	this.initialize(img._05apprehension);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,392,174);


(lib._06responders = function() {
	this.initialize(img._06responders);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,392,174);


(lib._07bulgarcircle = function() {
	this.initialize(img._07bulgarcircle);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,272,272);


(lib._08mediumcirclepngcopy = function() {
	this.initialize(img._08mediumcirclepngcopy);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,184,184);


(lib._09apprehensioncircle = function() {
	this.initialize(img._09apprehensioncircle);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,272,272);


(lib._10midcirclepngcopy = function() {
	this.initialize(img._10midcirclepngcopy);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib._11respondercircle = function() {
	this.initialize(img._11respondercircle);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,272,272);


(lib._12smallpngcopy = function() {
	this.initialize(img._12smallpngcopy);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,48,48);


(lib._13verifiedresponse = function() {
	this.initialize(img._13verifiedresponse);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,338,344);


(lib.IncidentLifecycle = function() {
	this.initialize(img.IncidentLifecycle);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,329,40);// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.stratoslogo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._01logo();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.200,0.200);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.stratoslogo, new cjs.Rectangle(0,0,209.8,57), null);


(lib.spacer = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CCCCCC").s().p("AqnEEIAAoHIVPAAIAAIHg");
	this.shape.setTransform(68,26);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,136,52);


(lib.labelverification = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CC1A42").s().p("AmLBNIAAiZIMXAAIAACZg");
	this.shape.setTransform(83.7,36.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img._03verification, null, new cjs.Matrix2D(0.498,0,0,0.498,-83.1,-22.2)).s().p("AGRDeIAAiZIsXAAIAACZIm5AAIAAm7IZ/AAIAAG7g");
	this.shape_1.setTransform(83.2,22.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelverification, new cjs.Rectangle(0,0,166.3,44.4), null);


(lib.labelstratos247 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._13verifiedresponse();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.505,0.505);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelstratos247, new cjs.Rectangle(0,0,170.6,173.6), null);


(lib.labelincidentlifecycle = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.IncidentLifecycle();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.497,0.497);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelincidentlifecycle, new cjs.Rectangle(0,0,163.7,19.9), null);


(lib.labelfirstresponders = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CC1A42").s().p("AmMBPIAAidIMZAAIAACdg");
	this.shape.setTransform(72.5,74.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img._06responders, null, new cjs.Matrix2D(0.512,0,0,0.512,-100.3,-44.5)).s().p("AvqG9IAAt5IfVAAIAAN5gAqiF+IMYAAIAAieIsYAAg");
	this.shape_1.setTransform(100.3,44.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelfirstresponders, new cjs.Rectangle(0,0,200.6,89.1), null);


(lib.labelburglaryincident = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CC1A42").s().p("AmMBPIAAidIMYAAIAACdg");
	this.shape.setTransform(94.9,67.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img._04bulgar, null, new cjs.Matrix2D(0.505,0,0,0.505,-99,-39.9)).s().p("AveGQIAAsfIe8AAIAAMfgAm2FmIMYAAIAAidIsYAAg");
	this.shape_1.setTransform(99.1,40);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelburglaryincident, new cjs.Rectangle(0,0,198.1,79.9), null);


(lib.labelapprehension = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CC1A42").s().p("ApNBPIAAidISbAAIAACdg");
	this.shape.setTransform(70.4,71.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img._05apprehension, null, new cjs.Matrix2D(0.493,0,0,0.493,-96.5,-42.8)).s().p("AvEGsIAAtYIeJAAIAANYgAtSFrISbAAIAAieIybAAg");
	this.shape_1.setTransform(96.5,42.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.labelapprehension, new cjs.Rectangle(0,0,193.1,85.7), null);


(lib.elementcircle03 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._08mediumcirclepngcopy();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.54,0.54);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.elementcircle03, new cjs.Rectangle(0,0,99.4,99.4), null);


(lib.elementcircle02 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._10midcirclepngcopy();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.509,0.509);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.elementcircle02, new cjs.Rectangle(0,0,65.1,65.1), null);


(lib.elementcircle01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._12smallpngcopy();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.546,0.546);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.elementcircle01, new cjs.Rectangle(0,0,26.3,26.3), null);


(lib.clock03 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._09apprehensioncircle();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.501,0.501);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.clock03, new cjs.Rectangle(0,0,136.4,136.4), null);


(lib.clock02 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._11respondercircle();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.502,0.502);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.clock02, new cjs.Rectangle(0,0,136.4,136.4), null);


(lib.clock01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._07bulgarcircle();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.506,0.506);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.clock01, new cjs.Rectangle(0,0,137.5,137.5), null);


(lib.cirlemc = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FA232B").s().p("AjhDiQhehdAAiFQAAiEBeheQBehdCDAAQCFAABdBdQBeBeAACEQAACFheBdQhdBeiFAAQiDAAheheg");
	this.shape.setTransform(20,20,0.625,0.625);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.cirlemc, new cjs.Rectangle(0,0,40,40), null);


(lib.btmcknowmore = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02btnknowmore();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.495,0.495);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.btmcknowmore, new cjs.Rectangle(0,0,231.7,69.3), null);


(lib.bgcirclemedium = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#FF4F78").ss(3,1,1).p("AfyAAQAANKpTJUQpUJUtLAAQtKAApUpUQpTpUAAtKQAAtKJTpUQJUpTNKAAQNLAAJUJTQJTJUAANKg");
	this.shape.setTransform(203.4,203.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.bgcirclemedium, new cjs.Rectangle(-1.5,-1.5,409.8,409.8), null);


(lib.bgcirclelarge = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#424242").ss(3,1,1).p("EAvzAAAQAATzuAOAQuAOAzzAAQzyAAuAuAQuAuAAAzzQAAzyOAuAQOAuATyAAQTzAAOAOAQOAOAAATyg");
	this.shape.setTransform(305.9,305.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.bgcirclelarge, new cjs.Rectangle(-1.5,-1.5,614.7,614.7), null);


(lib.rectanglemc = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_2
	this.instance = new lib.spacer("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(68,26,1,1,0,0,0,68,26);
	this.instance.alpha = 0.102;
	this.instance.filters = [new cjs.ColorFilter(0.5, 0.5, 0.5, 1, 128, 0, 0, 0)];
	this.instance.cache(-2,-2,140,56);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(55));

	// Layer_1
	this.instance_1 = new lib.spacer("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(68,26,1,1,0,0,0,68,26);
	this.instance_1.filters = [new cjs.ColorFilter(0.5, 0.5, 0.5, 1, 127.5, 0, 0, 0)];
	this.instance_1.cache(-2,-2,140,56);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regY:25.8,scaleX:5,scaleY:5,x:68.2,y:25,alpha:0.012},4).to({_off:true},1).wait(44).to({_off:false,regY:26,scaleX:1,scaleY:1,x:68,y:26,alpha:1},0).to({regY:25.8,scaleX:5,scaleY:5,x:68.2,y:25,alpha:0.012},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,136,52);


(lib.instr03 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_20 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(20).call(this.frame_20).wait(1));

	// Layer_2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgUBFQgKgDgHgGQgGgHgEgJQgEgKAAgMIAbAAIACALQABAFADAEQADADAFACQAFADAFAAQAKAAAGgGQAHgGAAgKQAAgIgEgFQgCgEgGgCQgFgCgFAAIgKAAIAAgTIAJAAIAJgCQAFgCADgEQADgEAAgGQAAgJgGgEQgGgFgIAAQgKAAgFAHQgGAHABALIgbAAQAAgLADgJQAEgJAGgGQAGgHAJgDQAJgEAKAAQAIAAAIADQAJACAHAFQAHAFAEAIQAEAHAAAJQAAAKgFAIQgFAIgKADIAAAAQAMADAGAHQAHAJAAAMQAAALgEAJQgEAIgIAGQgHAGgKADQgJADgKAAQgKAAgKgEg");
	this.shape.setTransform(19.5,19.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(21));

	// Layer_4
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FA232B").s().p("AjhDiQhehdAAiFQAAiEBeheQBehdCDAAQCFAABdBdQBeBeAACEQAACFheBdQhdBeiFAAQiDAAheheg");
	this.shape_1.setTransform(20,20,0.625,0.625);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(21));

	// Layer_1
	this.instance = new lib.cirlemc();
	this.instance.parent = this;
	this.instance.setTransform(20,20,1,1,0,0,0,20,20);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(15).to({alpha:0.5},0).to({regX:19.9,regY:19.9,scaleX:3.32,scaleY:3.32,x:19.7,y:19.7,alpha:0.051},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,40,40);


(lib.instr02 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_20 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(20).call(this.frame_20).wait(1));

	// Layer_2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgzBHQAAgMAEgIQAEgJAGgIQAFgHAJgGIARgMIAIgHIAKgGQAEgEADgFQAEgFAAgHQgBgKgGgFQgFgGgKAAQgFAAgEADQgFADgCAFIgEAKIgBALIgbAAQgBgLADgLQAEgKAGgIQAHgIAJgEQAKgEALgBQAKAAAJADQAJAEAGAFQAHAGAEAIQADAIABAKQAAALgEAHQgDAJgGAEIgNALIgOAKIgMAKQgIAFgEAHIBBAAIAAAYg");
	this.shape.setTransform(19.5,19.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(21));

	// Layer_4
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FA232B").s().p("AjhDiQhehdAAiFQAAiEBeheQBehdCDAAQCFAABdBdQBeBeAACEQAACFheBdQhdBeiFAAQiDAAheheg");
	this.shape_1.setTransform(20,20,0.625,0.625);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(21));

	// Layer_1
	this.instance = new lib.cirlemc();
	this.instance.parent = this;
	this.instance.setTransform(20,20,1,1,0,0,0,20,20);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(15).to({alpha:0.5},0).to({regX:19.9,regY:19.9,scaleX:3.32,scaleY:3.32,x:19.7,y:19.7,alpha:0.051},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,40,40);


(lib.instr01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_20 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(20).call(this.frame_20).wait(1));

	// Layer_2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AADBGIAAhaIgiAAIAAgVIAOgBQAHgCAGgDQAEgDAEgGQAEgFABgIIAXAAIAACLg");
	this.shape.setTransform(18.6,19.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(21));

	// Layer_4
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FA232B").s().p("AjhDiQhehdAAiFQAAiEBeheQBehdCDAAQCFAABdBdQBeBeAACEQAACFheBdQhdBeiFAAQiDAAheheg");
	this.shape_1.setTransform(20,20,0.625,0.625);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(21));

	// Layer_1
	this.instance = new lib.cirlemc();
	this.instance.parent = this;
	this.instance.setTransform(20,20,1,1,0,0,0,20,20);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(15).to({alpha:0.5},0).to({regX:19.9,regY:19.9,scaleX:3.32,scaleY:3.32,x:19.7,y:19.7,alpha:0.051},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,40,40);


(lib.btknowmore = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_2
	this.instance = new lib.btmcknowmore();
	this.instance.parent = this;
	this.instance.setTransform(115.9,34.6,1.176,1.176,0,0,0,115.7,34.4);
	this.instance.shadow = new cjs.Shadow("rgba(102,102,102,1)",0,0,58);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({_off:false},0).to({_off:true},1).wait(1));

	// Layer_1
	this.instance_1 = new lib.btmcknowmore();
	this.instance_1.parent = this;
	this.instance_1.setTransform(115.8,34.6,1,1,0,0,0,115.8,34.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(3));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,231.7,69.3);


(lib.replaybt = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#FF0000").ss(1,1,1).p("AqKkOIUVAAIAAIdI0VAAg");
	this.shape.setTransform(65.1,27.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AghBOQgQgGgMgMQgMgNgHgPQgHgRAAgRQAAgLADgLQADgLAGgKQACgFAFgBQAFgBAEACQAFADABAFQABAFgCAEQgEAHgCAIQgCAIAAAIQAAAMAFAMQAEALAJAJQAJAJALAFQAMAFAMAAQANAAALgFQAMgFAIgJQAJgJAFgLQAFgMAAgMQAAgJgDgJQgDgJgFgIIgEAKQgCAEgEgBQgDAAgEgFIgbglQgDgFACgDQABgEAGgBIAtgFQAGAAADADQADADgDAEIgFAMQAMAMAGAQQAHAPAAARQAAARgHARQgHAPgMANQgMAMgQAGQgQAHgSAAQgRAAgQgHg");
	this.shape_1.setTransform(30.3,28.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FA232B").s().p("AgkBJIgBgKIABgKQANADANAAQAJAAAEgDQAGgCADgHQAFgIAAgOQgMAIgMAAQgTAAgJgKQgJgJABgUIAAhCIAMgBIAPABIAABBQAAAKAEADQAEAEAIAAQAKABAHgIIAAhLIAOgBIAOABIAABUQgBAPgBALQgBALgGAJQgNAWgdAAQgSAAgMgEg");
	this.shape_2.setTransform(102.1,30.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FA232B").s().p("AgiAtQgJgJAAgPQAAgmAzAAIAIABIAAgFQgBgGgEgCQgFgDgHABQgPAAgRAEQgBgFAAgHIABgJQARgFASAAQAUAAALAJQALAJAAASIAAAoIAAAOIAAAPIgMABIgMgBIgBgJIAAAAQgFAFgIADQgHADgIAAQgPAAgKgJgAgKAHQgGAFAAAHQAAAGAEAEQAEADAGAAQAJAAAKgIIAAgVIgJAAQgMAAgGAEg");
	this.shape_3.setTransform(90.8,27.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FA232B").s().p("AgNBJIAAiRIANgBIAOABIAACRIgOABg");
	this.shape_4.setTransform(83.1,25.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FA232B").s().p("AgvBMIAAiWIANgBIALABIABAJQAFgFAIgDQAHgDAIAAQALAAAHAEQAIAEAGAHQAFAHACAJQADAJAAAKQAAAJgDAJQgCAIgDAGQgFAHgFAFQgFAFgJADQgHADgJAAQgKAAgJgDIAAAyIgOABgAgKg0QgGACgDAEIAAA0QAFACALAAQALAAAFgIQAGgIAAgQQAAgOgFgIQgFgIgJAAQgFAAgFACg");
	this.shape_5.setTransform(75.1,30.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FA232B").s().p("AgQAyQgKgEgHgHQgGgHgDgKQgDgJAAgNQAAgKADgJQADgJAGgJQAFgHAKgFQAJgEALAAQAMAAAJAEQAIAEAFAHQAFAHADAIQACAJAAAKIgBAOIg+AAQABAKAHAGQAGAGAMAAQAPAAAMgDQACAIAAAJIAAADQgPAFgQAAQgNAAgKgEgAASgKQAAgXgQABQgIAAgFAFQgFAHgBAKIAjAAIAAAAg");
	this.shape_6.setTransform(63.8,27.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FA232B").s().p("AASBEIgagxIgMAAIAAAxIgPABIgOgBIAAiGIAogBQAZAAANAKQAMAKAAAWQAAANgHALQgHAKgKAFIAhA2IgRABIgPgBgAgUgsIAAAoIAKAAQALAAAGgFQAFgEAAgMQAAgKgEgEQgFgFgKAAg");
	this.shape_7.setTransform(53,26.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer_2
	this.instance = new lib.spacer("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(68,26,1,1,0,0,0,68,26);
	this.instance.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer_3
	this.instance_1 = new lib.rectanglemc();
	this.instance_1.parent = this;
	this.instance_1.setTransform(68,26,1,1,0,0,0,68,26);
	this.instance_1.alpha = 0.051;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1,-1,137,56.3);


// stage content:
(lib.stratosanimate2 = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{start:0,ends:143});

	// timeline functions:
	this.frame_143 = function() {
		this.stop();
		
		this.bt_replay.addEventListener("click", fl_ClickToGoToAndStopAtFrame.bind(this));
		
		function fl_ClickToGoToAndStopAtFrame()
		{
		    this.gotoAndPlay("start");
		}
		
		
		
		this.bt_know_more.addEventListener("click", fl_ClickToGoToWebPage);
		
		function fl_ClickToGoToWebPage() {
			window.open("https://stratos.ph/services/central-management-system", "_top");
		}
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(143).call(this.frame_143).wait(1));

	// rotating-arrow-to-the-left.svg
	this.instance = new lib.replaybt();
	this.instance.parent = this;
	this.instance.setTransform(1198.6,251,1,1,0,0,0,65,27.1);
	this.instance.alpha = 0;
	this.instance._off = true;
	new cjs.ButtonHelper(this.instance, 0, 1, 1);

	this.bt_replay = new lib.replaybt();
	this.bt_replay.name = "bt_replay";
	this.bt_replay.parent = this;
	this.bt_replay.setTransform(1013.6,223.9);
	new cjs.ButtonHelper(this.bt_replay, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},136).to({state:[{t:this.bt_replay}]},7).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(136).to({_off:false},0).to({_off:true,regX:0,regY:0,x:1013.6,y:223.9,alpha:1},7).wait(1));

	// btn-know-more
	this.instance_1 = new lib.btknowmore();
	this.instance_1.parent = this;
	this.instance_1.setTransform(679,529.6,1,1,0,0,0,115.8,34.6);
	this.instance_1.alpha = 0.059;
	this.instance_1._off = true;
	new cjs.ButtonHelper(this.instance_1, 0, 1, 2);

	this.bt_know_more = new lib.btknowmore();
	this.bt_know_more.name = "bt_know_more";
	this.bt_know_more.parent = this;
	this.bt_know_more.setTransform(619,529.6,1,1,0,0,0,115.8,34.6);
	new cjs.ButtonHelper(this.bt_know_more, 0, 1, 2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_1}]},129).to({state:[{t:this.bt_know_more}]},3).wait(12));
	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(129).to({_off:false},0).to({_off:true,x:619,alpha:1},3,cjs.Ease.quadOut).wait(12));

	// Incident Lifecycle
	this.instance_2 = new lib.labelincidentlifecycle();
	this.instance_2.parent = this;
	this.instance_2.setTransform(626.1,510,1,1,0,0,0,81.9,10);
	this.instance_2.alpha = 0.059;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(126).to({_off:false},0).to({y:450,alpha:1},3,cjs.Ease.quadOut).wait(15));

	// stratos-logo
	this.instance_3 = new lib.stratoslogo();
	this.instance_3.parent = this;
	this.instance_3.setTransform(623.1,450.5,1,1,0,0,0,104.9,28.5);
	this.instance_3.alpha = 0.059;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(122).to({_off:false},0).to({y:390.5,alpha:1},3,cjs.Ease.quadOut).wait(19));

	// circle-02
	this.instance_4 = new lib.elementcircle02();
	this.instance_4.parent = this;
	this.instance_4.setTransform(835.7,713.5,1,1,0,0,0,32.5,32.5);
	this.instance_4.alpha = 0.059;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(117).to({_off:false},0).to({y:673.5,alpha:1},3).wait(24));

	// circle-01
	this.instance_5 = new lib.elementcircle03();
	this.instance_5.parent = this;
	this.instance_5.setTransform(457.9,796.7,1,1,0,0,0,49.7,49.7);
	this.instance_5.alpha = 0.059;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(116).to({_off:false},0).to({y:716.7,alpha:1},3).wait(25));

	// apprehension
	this.instance_6 = new lib.labelapprehension();
	this.instance_6.parent = this;
	this.instance_6.setTransform(891.7,793.9,1,1,0,0,0,96.5,42.9);
	this.instance_6.alpha = 0.059;
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(114).to({_off:false},0).to({x:811.7,alpha:1},3).wait(27));

	// circle-apprenhension
	this.instance_7 = new lib.clock03();
	this.instance_7.parent = this;
	this.instance_7.setTransform(622.4,861.2,1,1,0,0,0,68.2,68.2);
	this.instance_7.alpha = 0.059;
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(112).to({_off:false},0).to({y:781.2,alpha:1},3).wait(29));

	// circle-responders
	this.instance_8 = new lib.clock02();
	this.instance_8.parent = this;
	this.instance_8.setTransform(933.4,535.2,1,1,0,0,0,68.2,68.2);
	this.instance_8.alpha = 0.059;
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(83).to({_off:false},0).to({y:455.2,alpha:1},3).wait(58));

	// responder
	this.instance_9 = new lib.labelfirstresponders();
	this.instance_9.parent = this;
	this.instance_9.setTransform(1180.5,437.5,1,1,0,0,0,100.3,44.5);
	this.instance_9.alpha = 0.059;
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(85).to({_off:false},0).to({x:1100.5,alpha:1},3).wait(56));

	// 24-7
	this.instance_10 = new lib.labelstratos247();
	this.instance_10.parent = this;
	this.instance_10.setTransform(629.4,26.8,1,1,0,0,0,85.2,86.8);
	this.instance_10.alpha = 0.059;
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(78).to({_off:false},0).to({y:106.8,alpha:1},3).wait(63));

	// verification
	this.instance_11 = new lib.labelverification();
	this.instance_11.parent = this;
	this.instance_11.setTransform(109.2,273);
	this.instance_11.alpha = 0.059;
	this.instance_11._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(53).to({_off:false},0).to({x:169.2,alpha:1},3).wait(88));

	// btn-circle-01
	this.instance_12 = new lib.elementcircle01();
	this.instance_12.parent = this;
	this.instance_12.setTransform(359.3,365.1,1,1,0,0,0,13.1,13.1);
	this.instance_12.alpha = 0.059;
	this.instance_12._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(52).to({_off:false},0).to({y:299.1,alpha:1},3).wait(89));

	// bulgary
	this.instance_13 = new lib.labelburglaryincident();
	this.instance_13.parent = this;
	this.instance_13.setTransform(31.2,431,1,1,0,0,0,99,44);
	this.instance_13.alpha = 0;
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(51).to({_off:false},0).to({x:130.2,alpha:1},2).wait(91));

	// circle-burglar
	this.instance_14 = new lib.clock01();
	this.instance_14.parent = this;
	this.instance_14.setTransform(299,550.8,1,1,0,0,0,68.8,68.8);
	this.instance_14.alpha = 0;
	this.instance_14._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(49).to({_off:false},0).to({y:451.8,alpha:1},3).wait(92));

	// Layer_6
	this.instance_15 = new lib.instr03();
	this.instance_15.parent = this;
	this.instance_15.setTransform(629.3,845.7,1.129,1.129,0,0,0,23.1,26.1);
	this.instance_15.alpha = 0.051;
	this.instance_15._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(14).to({_off:false},0).to({regX:23,scaleX:2.05,scaleY:2.05,x:629.1,alpha:1},5).to({_off:true},29).wait(96));

	// Layer_5
	this.instance_16 = new lib.instr02();
	this.instance_16.parent = this;
	this.instance_16.setTransform(1012.9,452,1.048,1.048,0,0,0,24.9,21.2);
	this.instance_16.alpha = 0.051;
	this.instance_16._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_16).wait(10).to({_off:false},0).to({regX:0,regY:0,scaleX:2.05,scaleY:2.05,x:961.8,y:408.3,alpha:1},4).to({_off:true},32).wait(98));

	// Layer_4
	this.instance_17 = new lib.instr01();
	this.instance_17.parent = this;
	this.instance_17.setTransform(243,449.8,0.766,0.766,0,0,0,20.1,20.2);
	this.instance_17.alpha = 0.051;
	this.instance_17._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_17).wait(5).to({_off:false},0).to({scaleX:2.05,scaleY:2.05,y:449.7,alpha:1},5).to({_off:true},34).wait(100));

	// Layer_2
	this.instance_18 = new lib.bgcirclelarge();
	this.instance_18.parent = this;
	this.instance_18.setTransform(619.9,458,0.274,0.274,0,0,0,305.9,305.9);
	this.instance_18._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_18).wait(3).to({_off:false},0).to({scaleX:1,scaleY:1,x:619.8,y:457.9},3,cjs.Ease.quadOut).wait(138));

	// Layer_3
	this.instance_19 = new lib.bgcirclemedium();
	this.instance_19.parent = this;
	this.instance_19.setTransform(619.8,457.9,0.371,0.371,0,0,0,203.4,203.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_19).to({scaleX:1,scaleY:1},3,cjs.Ease.quadOut).wait(141));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(1153.8,863.9,152,152);
// library properties:
lib.properties = {
	id: 'F906DF023AD44BCA9655974C39BB63FC',
	width: 1220,
	height: 964,
	fps: 24,
	color: "#000000",
	opacity: 0.00,
	manifest: [
		{src:"images/_01logo.png?1563744493495", id:"_01logo"},
		{src:"images/_02btnknowmore.png?1563744493495", id:"_02btnknowmore"},
		{src:"images/_03verification.png?1563744493495", id:"_03verification"},
		{src:"images/_04bulgar.png?1563744493495", id:"_04bulgar"},
		{src:"images/_05apprehension.png?1563744493495", id:"_05apprehension"},
		{src:"images/_06responders.png?1563744493495", id:"_06responders"},
		{src:"images/_07bulgarcircle.png?1563744493495", id:"_07bulgarcircle"},
		{src:"images/_08mediumcirclepngcopy.png?1563744493495", id:"_08mediumcirclepngcopy"},
		{src:"images/_09apprehensioncircle.png?1563744493495", id:"_09apprehensioncircle"},
		{src:"images/_10midcirclepngcopy.png?1563744493495", id:"_10midcirclepngcopy"},
		{src:"images/_11respondercircle.png?1563744493495", id:"_11respondercircle"},
		{src:"images/_12smallpngcopy.png?1563744493495", id:"_12smallpngcopy"},
		{src:"images/_13verifiedresponse.png?1563744493495", id:"_13verifiedresponse"},
		{src:"images/IncidentLifecycle.png?1563744493495", id:"IncidentLifecycle"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['F906DF023AD44BCA9655974C39BB63FC'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;