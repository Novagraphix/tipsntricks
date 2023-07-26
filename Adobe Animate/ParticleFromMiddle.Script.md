# Particle from middle or other point Script

## Auf der Bühne

Einen Movieclip erstellen, z.B. schnee_animation. Auf die Bühne schieben und innerhalb des Clips dann das Script an Frame 1 einfügen.

## In der Bibliothek

Bitte die Particle bitte in der Bibliothek erstellen. Dafür einfach bei Verknüpfung linksklicken und einen eindeutigen Namen vergeben.

## Script

```
var W = 970; var H = 250; var XS = 316; var YS = 169;
var container = this;

for(var i = 0; i < 20; i++) {
	counter();
}

function counter() {
	count = 0
	while(count <= 3) {
		new create_particles(count);
	}
}

function create_particles(cnt) {
	if(cnt == 0) item = new lib.Particle();
	if(cnt == 1) item = new lib.Particle2();
	if(cnt == 2) item = new lib.Particle3();
	if(cnt == 3) item = new lib.Particle4();
	item.alpha = Math.random() *1 +0.5;
	item.x = XS;
	item.y = YS;
	item.scaleX = item.scaleY = Math.random() * 1 - .2;
	item.vy = randomIntFromInterval(-3,3);
	item.vx = randomIntFromInterval(-3,3);
	container.addChild(item);
	//createjs.Ticker
	createjs.Ticker.interval = 30;
	createjs.Ticker.framerate = 24;
	item.addEventListener("tick", animate);
	count++;
}

function animate(event) {
	event.target.y += event.target.vy;
	event.target.x += event.target.vx;
	if (event.target.y > H+20 || event.target.y < -20 || event.target.x > W+20 || event.target.x < -20) {
		event.target.y = YS;
		event.target.x = XS;
		event.target.vy = randomIntFromInterval(-3,3);
		event.target.vx = randomIntFromInterval(-3,3);
	}
}

function randomIntFromInterval(min, max) { // min and max included
  return Math.random() * (max - min + 1) + min
}
```
