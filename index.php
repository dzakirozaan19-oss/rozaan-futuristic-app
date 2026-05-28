<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Futuristic Personal Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

<link rel="manifest" href="manifest.json">

<meta name="theme-color" content="#00f7ff">

<meta name="apple-mobile-web-app-capable" content="yes">

</head>
<body>

<canvas id="bg3d"></canvas>

<!-- LOADER -->
<div id="loader">
  <div class="spinner"></div>
  <h2>Loading System...</h2>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">

<a class="navbar-brand" href="#">ROZAAN</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
<li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>

</ul>
</div>

</div>
</nav>

<!-- HERO -->
<section id="home" class="hero">
<div class="container text-center">

<img src="images/profile.jpeg" class="profile">

<h1 class="glow-text">
Hi, I'm <span id="typing"></span>
</h1>

<p>Web Developer | UI Designer | Student</p>

<button class="btn btn-glow">Explore</button>

</div>
</section>

<!-- ABOUT -->
<section id="about" class="about container py-5">
<h2 class="text-center mb-5">About Me</h2>

<div class="row">

<div class="col-md-6">
<h3>Who Am I?</h3>
<p>
Halo, saya Rozaan. Saya seorang mahasiswa yang tertarik
pada web development, UI/UX, dan teknologi modern.
</p>
</div>

<div class="col-md-6">
<h3>Skills</h3>

<p>HTML & CSS</p>
<div class="progress mb-3">
<div class="progress-bar w-100">
95%
</div>
</div>

<p>JavaScript</p>
<div class="progress mb-3">
<div class="progress-bar w-75">
75%
</div>
</div>

<p>PHP Backend</p>
<div class="progress mb-3">
<div class="progress-bar w-75">
75%
</div>
</div>

<p>Bootstrap UI</p>
<div class="progress mb-3">
<div class="progress-bar w-100">
90%
</div>
</div>

<p>Firebase</p>
<div class="progress mb-3">
<div class="progress-bar w-50">
60%
</div>
</div>

<p>AI Integration</p>
<div class="progress mb-3">
<div class="progress-bar w-50">
60%
</div>
</div>

<p>Live2D Avatar</p>
<div class="progress mb-3">
<div class="progress-bar w-50">
55%
</div>
</div>

<p>PWA Development</p>
<div class="progress mb-3">
<div class="progress-bar w-75">
70%
</div>
</div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="portfolio container py-5">
<h2 class="text-center mb-5">Portfolio</h2>

<div class="row">

<div class="col-md-4">
<div class="card futuristic-card">
<img src="images/project1.jpg" class="card-img-top">
<div class="card-body">
<h5>Project Website</h5>
<p>Modern website With AI System FireBase And Live2D Avatar.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card futuristic-card">
<img src="images/project2.png" class="card-img-top">
<div class="card-body">
<h5>UI Design</h5>
<p>Futuristic interface.</p>
</div>
</div>
</div>

</div>
</section>

<!-- ================= JS KAMU TETAP SEMUA ================= -->

<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- VANILLA TILT (TETAP ADA) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>

<script>
VanillaTilt.init(
document.querySelectorAll(".futuristic-card"),
{
max:25,
speed:400,
glare:true,
"max-glare":0.5
}
);
</script>

<!-- LOADER + SCROLL + JAM -->
<script>
window.onload=function(){

setTimeout(function(){
document.getElementById("loader").style.opacity="0";

setTimeout(function(){
document.getElementById("loader").style.display="none";
},500);

},3000);

}

window.addEventListener("scroll",()=>{

let reveals=document.querySelectorAll(".reveal");

reveals.forEach((item)=>{

let posisi=item.getBoundingClientRect().top;
let layar=window.innerHeight;

if(posisi<layar-150){
item.classList.add("active");
}

});

});

function updateJam(){
let now=new Date();
let jam=document.getElementById("jam");
if(jam){
jam.innerHTML = now.toLocaleTimeString();
}
}

setInterval(updateJam,1000);
updateJam();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(
75,
window.innerWidth / window.innerHeight,
0.1,
1000
);

const renderer = new THREE.WebGLRenderer({
canvas: document.getElementById("bg3d"),
alpha:true
});

renderer.setSize(window.innerWidth, window.innerHeight);
camera.position.z = 5;

/* ===== PARTICLE 3D ===== */
const particlesGeometry = new THREE.BufferGeometry();
const particlesCount = 1500;

const posArray = new Float32Array(particlesCount * 3);

for(let i = 0; i < particlesCount * 3; i++){
posArray[i] = (Math.random() - 0.5) * 10;
}

particlesGeometry.setAttribute(
"position",
new THREE.BufferAttribute(posArray, 3)
);

const particlesMaterial = new THREE.PointsMaterial({
size:0.02,
color:"#00f7ff"
});

const particlesMesh = new THREE.Points(
particlesGeometry,
particlesMaterial
);

scene.add(particlesMesh);

/* ===== ANIMATE ===== */
function animate(){
requestAnimationFrame(animate);

particlesMesh.rotation.y += 0.001;
particlesMesh.rotation.x += 0.0005;

renderer.render(scene, camera);
}

animate();

/* ===== RESPONSIVE ===== */
window.addEventListener("resize", ()=>{
renderer.setSize(window.innerWidth, window.innerHeight);
camera.aspect = window.innerWidth / window.innerHeight;
camera.updateProjectionMatrix();

scene.background = new THREE.Color("#001018");

});

</script>

<script>
if("serviceWorker" in navigator){
navigator.serviceWorker.register("service-worker.js");
}
</script>

</body>
</html>