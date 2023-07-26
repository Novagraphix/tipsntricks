# Schnee Script

## Auf der Bühne

Einen leeren MovieClip Container erstellen und benennen. Das Script auf Frame 1 Root und die Befehlszeile auf den Punkt des Starts der Animation.

## Usage

```
var schuettel1 = new this.Schuettel({holder:this.holder_tt, target:"tt", duration:250, scale:0.2, alpha:0.2, rotation:10, count:3});
```

## Script

```
this.Schuettel = function (o) {
    this.holder = o.holder;
	var count = o.count;
	var array = new Array(); ;
	for(var i=0;i<o.count;i++) {
		var tmp = new lib[o.target]();
		tmp.alpha = 0;
		bnds = tmp.getBounds();
		tmp.regX = bnds.width/2;
		tmp.regY = bnds.height/2;
		array.push(tmp);
		o.holder.addChild(tmp);
	}

	var myVar = setInterval(myTimer, o.duration/o.count);
	var myVar2 = setInterval(timerListener2, 30);

	function myTimer() {
		if(count != 0) {
			myVar2 = setInterval(timerListener2, 30);
		}
		count--;
	}

	setTimeout(myTimeout1, o.duration);
	function myTimeout1() {
		clearInterval(myVar);
		clearInterval(myVar2);
		timerComplete();
	}

	function timerListener2() {
		for(var i=1;i<array.length;i++) {
			var rot = (Math.random()*(o.rotation*2))-o.rotation;
			var scale = (Math.random()*o.scale)+1;
			var al = (Math.random()*o.alpha)+0.1;
			array[i].alpha = al;
			createjs.Tween.get(array[i])
				.to({scaleX: scale, scaleY: scale, rotation: rot});
		}
	}

	function timerComplete() {
		while(o.holder.numChildren>1) o.holder.removeChildAt(1);
	}
}
```
