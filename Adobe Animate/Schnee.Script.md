# Schnee Script

## Auf der Bühne

Einen Movieclip erstellen, z.B. schnee_animation. Auf die Bühne schieben und innerhalb des Clips dann das Script an Frame 1 einfügen.

## In der Bibliothek

Bitte die Particle bitte in der Bibliothek erstellen. Dafür einfach bei Verknüpfung linksklicken und einen eindeutigen Namen vergeben.

## Script

```
var W = 330; var H = 250;
var vx=.1-Math.random();
var container = this;
var count = 0;

for(var i = 0; i < 60; i++) {
	new create_particles();
}

function create_particles() {
	if (count%2) {
		item = new lib.Particle();
	} else {
		item = new lib.Particle();
	}
	item.alpha = Math.random() *1 +0.5;
	item.x = Math.random() * W;
	item.y = Math.random() * H;
	item.scaleX = item.scaleY = Math.random() * 1 - .2;
	item.vy = Math.random() * 2 + 2;
	item.vx = Math.random() * -1 + .3;
	item.gravity = 1;
	container.addChild(item);
	//createjs.Ticker
	createjs.Ticker.interval = 30;
	createjs.Ticker.framerate = 24;
	item.addEventListener("tick", animate);
	count++;
}

function animate(event) {
	event.target.y +=event.target.vy;
	event.target.x +=vx;
	if (event.target.y > H) {
		event.target.y = -200;
		event.target.x = Math.random() * W;
	}
}
```
