
<!DOCTYPE html> 
<html> 
  <head>
	<title>The AR Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
      html, body {user-select:none;}
    h1, p {
  font-family: 'open sans', sans-serif;
}

.main {
        width:100%;
        height:100vh;
        background: white;
        opacity: 0.65;
        position:fixed;
        backdrop-filter: blur(5px);
        top:0;
        left:0;
        bottom:0;
        right:0;
      }
      #scene {
        position:fixed;
        top:0;
        left:0;
        bottom:0;
        right:0;
      }

div {
  transition: 0.2s;
  padding: 10px;
  right:-25px;
}

.block {
        border-color: #C4CFD6;
        border-radius: 0px;
        border-width: .5px;
        border-style: solid;
        padding:20px;
        background: white;
        width:90%;
      }
      .button {
        background:#1DA1F2;color:white;border:0;outline:none;border-radius:50px;width:300px;
        font-size:20px;
      }

      div:hover {
        right:0px;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="https://matthew.wagerfield.com/parallax/assets/styles/css/styles.css" />
  </head>
  <body>
    <main style="height:100vh;width:100%;">
  <ul id="scene" class="scene unselectable"
			data-friction-x="0.1"
			data-friction-y="0.1"
			data-scalar-x="25"
			data-scalar-y="15">
			<li class="layer" data-depth="0.00"></li>
			<li class="layer" data-depth="0.10"><div class="background"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange b phase-4"></div></li>
			<li class="layer" data-depth="0.10"><div class="light purple c phase-5"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange d phase-3"></div></li>
			<li class="layer" data-depth="0.15">
				<ul class="rope depth-10">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-2">
						<div class="board cloud-2 swing-1"></div>
					</li>
					<li class="hanger position-4">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-8">
						<div class="board birds swing-5"></div>
					</li>
				</ul>
			</li>
    <li class="layer" data-depth="0.20"><h1 class="title">Try <em>AR</em> Models<br></li>
			<li class="layer" data-depth="0.30">
				<ul class="rope depth-30">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-1">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-5">
						<div class="board cloud-4 swing-1"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.30"><div class="wave paint depth-30"></div></li>
			<li class="layer" data-depth="0.40"><div class="wave plain depth-40"></div></li>
			<li class="layer" data-depth="0.50"><div class="wave paint depth-50"></div></li>
			<li class="layer" data-depth="0.60"><div class="lighthouse depth-60"></div></li>
			<li class="layer" data-depth="0.60">
				<ul class="rope depth-60">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-3">
						<div class="board birds swing-5"></div>
					</li>
					<li class="hanger position-6">
						<div class="board cloud-2 swing-2"></div>
					</li>
					<li class="hanger position-8">
						<div class="board cloud-3 swing-4"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.60"><div class="wave plain depth-60"></div></li>
			<li class="layer" data-depth="0.80"><div class="wave plain depth-80"></div></li>
			<li class="layer" data-depth="1.00"><div class="wave paint depth-100"></div></li>
		</ul>
			</main>
			<div class="main"></div>
			<div style="position:absolute;left:10%;width:80%;top:300px;background:transparent;height:100vh;"></div>
    <div style="position:absolute;left:10%;width:80%;top:100px;background:white;height:100vh;opacity:1;background-filter:none;border-radius:25px;color:black;padding-top:50px;padding-bottom:50px;overflow:auto;background:white;">
		<center>
		<div class="block">
		<h1>Apartment Building</h1>
		<br>
		<p>A quite large apartment building</p>
		<br><img src="/apbuilding.png"/><br>
		<button class="button" onclick="window.open('https://console.echoar.xyz/webar?key=frosty-shadow-6821&entry=5d2406ec-8c89-4e8a-bcee-e1cc1a0338b7')">Try this model!</button>
		</div>
		<div class="block">
		<h1>Skyscraper</h1>
		<br>
		<p>A VERY large building! (too big to show good!)</p>
		<br><img src="/skyscraper.png"/><br>
		<button class="button" onclick="window.open('https://go.echoar.xyz/tyUz')">Try this model!</button>
		</div>
		<div class="block">
		<h1>Switch</h1>
		<br>
		<p>The nitendo switch.</p>
		<br><img src="/nintendoswitch.png"/><br>
		<button class="button" onclick="window.open('https://go.echoar.xyz/UGU3')">Try this model!</button>
		</div>
		<div class="block">
		<h1>Workstation</h1>
		<br>
		<p>It's a dream Workstation!</p>
		<br><img src="/workspace.png"/><br>
		<button class="button" onclick="window.open('https://go.echoar.xyz/q15W')">Try this model!</button>
		</div>
		<div class="block">
		<h1>The world</h1>
		<br>
		<p>It's the world, right in AR!</p>
		<br><img src="/world.png"/><br>
		<button class="button" onclick="window.open('https://go.echoar.xyz/j6N8')">Try this model!</button>
		</div>
		</center>
		</div> 
			
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>var scene=document.getElementById('scene');var parallaxInstance=new Parallax(scene);</script>
  </body>
</html>