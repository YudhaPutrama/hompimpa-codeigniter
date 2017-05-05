function Level() {
	
	Phaser.State.call(this);
	
}

/** @type Phaser.State */
var Level_proto = Object.create(Phaser.State.prototype);
Level.prototype = Level_proto;
Level.prototype.constructor = Level;

Level.prototype.init = function () {
	
	this.scale.scaleMode = Phaser.ScaleManager.SHOW_ALL;
	this.scale.pageAlignHorizontally = true;
	this.scale.pageAlignVertically = true;
	this.stage.backgroundColor = '#ffffff';
	
};

Level.prototype.preload = function () {
	
	this.load.pack('play', '/public/games/assets/balapkarung.json');
	
};

var bg=[];
var player;
var enemy;
var spaceKey;
var isJump;
var isPlay = false;
var isReady = false;
var seconds = 0;
var lastTime;
Level.prototype.create = function () {
	// this.game.physics.startSystem(Phaser.Physics.ARCADE);
	bg[1] = this.add.tileSprite(0, 0, 800, 600, '11');
	bg[2] = this.add.tileSprite(0, 0, 800, 600, '09');
	bg[3] = this.add.tileSprite(0, 0, 800, 600, '07');
	bg[4] = this.add.tileSprite(0, 0, 800, 600, '06');
	bg[5] = this.add.tileSprite(0, 0, 800, 600, '05');
	bg[6] = this.add.tileSprite(0, 0, 800, 600, '04');
	bg[7] = this.add.tileSprite(0, 0, 800, 600, '03');
	bg[8] = this.add.tileSprite(0, 0, 800, 600, '02');
	//bg[9] = this.add.tileSprite(0, 0, 800, 600, '01');
	
	this.enemy = this.add.sprite(169, 290, 'budi_jump', 0);
	this.player = this.add.sprite(169, 400, 'budi_jump', 0);
	

	// this.game.physics.enable(this.player, Phaser.Physics.ARCADE);

	this.player.animations.add('jump');
	this.enemy.animations.add('jump');
	
	this.spaceKey = this.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
	// to change this code: Canvas editor > Configuration > Editor > userCode > Create

	this.game.input.keyboard.addKeyCapture([ Phaser.Keyboard.SPACEBAR ]);
	this.isJump = false;
	// this.lastTime = game.time.time;
	// if(socket!=null){
		// socket.on('connect', function(){
			// this.playerReady();
		// });
	// } else {
		this.playerReady();
	
	// }
};

Level.prototype.playerReady = function(){
	this.isPlay = true;
	console.log('Play');
}

Level.prototype.playLoop = function(){
	for(var i=1; i<9; i++){
		bg[i].tilePosition.x -= i*0.075;
	}
	this.player.position.x -= 9*0.075;
	this.enemy.position.x -= 9*0.075;

	var enemyJump;
	// if(socket.on('jump')){
	// 	enemyJump = this.enemy.play('jump',6,false);
	// 	console.log(enemyJump)

	// 	// this.player.position.x += 9;
	// 	console.log('Musuh Lompat')
	// 	if(enemyJump.isPlaying){
	// 		this.enemy.position.x +=5;
	// 	}
	// }
	// if(this.player.position.x<-100){
	// 	this.add.text(100, 200, "HAHAA");
	// }
	var playJump;
	if(this.spaceKey.isDown){
		playJump = this.player.play('jump',6,false);
		console.log(playJump)

		// this.player.position.x += 9;
		console.log('Lompat')
		if(playJump.isPlaying){
			this.player.position.x +=5;
		}
	}
};

Level.prototype.update = function(){
	if(this.isPlay){
		this.playLoop();
		console.log('Run');
	}
};

var game = new Phaser.Game(800, 600, Phaser.AUTO, "game-container");
game.state.add("Level", Level, true);
