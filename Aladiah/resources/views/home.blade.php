<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>ALADIAH | Accueil</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --green:#0f2f25;
    --gold:#c9a24d;
    --light:#faf8f4;
    --dark:#1c1c1c;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Montserrat',sans-serif;
    background:var(--light);
    color:var(--dark);
    line-height:1.6;
    scroll-behavior:smooth;
}

/* ===== NAVBAR ===== */
header{
    background:var(--green);
    position:fixed;
    width:100%;
    top:0;
    z-index:1000;
    transition:.3s;
}

header.scrolled{
    background:#0b1f18;
    box-shadow:0 4px 15px rgba(0,0,0,0.3);
}

nav{
    padding:12px 7%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
}

.logo img{
    width:80px;
    border-radius:8px;
    box-shadow:0 4px 12px rgba(0,0,0,0.3);
}

.logo-text{
    font-family:'Playfair Display',serif;
    font-size:26px;
    color:var(--gold);
    letter-spacing:2px;
    font-weight:600;
}

/* MENU NORMAL */
.nav-links{
    list-style:none;
    display:flex;
    gap:15px;
}

.nav-links li a{
    color:white;
    text-decoration:none;
    font-weight:500;
    padding:8px 16px;
    border:2px solid white;
    border-radius:8px;
    transition: all 0.3s;
}

.nav-links li a:hover{
    color: var(--gold);
    border-color: var(--gold);
    background: rgba(255,255,255,0.1);
}

/* BOUTON HAMBURGER */
.menu-toggle{
    display:none;
    font-size:28px;
    color:white;
    cursor:pointer;
}

/* ===== HERO ===== */
.hero{
    height:85vh;
    margin-top:80px;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
    padding:20px;
    position:relative;
    overflow:hidden;
    background: var(--green);
}

.hero::before,
.hero::after{
    content:"";
    position:absolute;
    inset:0;
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
    opacity:0;
    transition:opacity 1.5s ease-in-out;
}

.hero::before{
    background-image:
        linear-gradient(rgba(15,47,37,0.7), rgba(15,47,37,0.7)),
        url('/images/bomi-min.png');
    animation: fade1 10s infinite;
}

.hero::after{
    background-image:
        linear-gradient(rgba(15,47,37,0.7), rgba(15,47,37,0.7)),
        url('/images/chef-cusine-min.png');
    animation: fade2 10s infinite;
}

@keyframes fade1{
    0%,45% { opacity:1; }
    50%,95% { opacity:0; }
    100% { opacity:1; }
}

@keyframes fade2{
    0%,45% { opacity:0; }
    50%,95% { opacity:1; }
    100% { opacity:0; }
}

.hero-content{
    max-width:800px;
    position:relative;
    z-index:2;
}

.hero h1{
    font-family:'Playfair Display',serif;
    font-size:3rem;
    margin-bottom:20px;
}

.hero p{
    font-size:1.2rem;
    margin-bottom:30px;
}

.btn{
    display:inline-block;
    background:var(--gold);
    padding:14px 35px;
    border-radius:30px;
    text-decoration:none;
    color:black;
    font-weight:600;
}

/* ===== SECTIONS ===== */
section{
    padding:70px 7%;
    text-align:center;
}

section h2{
    font-family:'Playfair Display',serif;
    color:var(--green);
    margin-bottom:25px;
}

.section-content{
    max-width:750px;
    margin:auto;
}

/* ===== WHATSAPP ===== */
.whatsapp{
    position:fixed;
    right:18px;
    bottom:18px;
    background:#25D366;
    color:white;
    padding:14px 18px;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 6px 18px rgba(0,0,0,.3);
}

/* ===== FOOTER ===== */
footer{
    background:#0b0b0b;
    color:#aaa;
    text-align:center;
    padding:18px;
    font-size:.9rem;
}

/* ===== VERSION MOBILE ===== */
@media(max-width:768px){

    .menu-toggle{
        display:block;
    }

    .nav-links{
        position:absolute;
        top:70px;
        right:0;
        background:var(--green);
        width:100%;
        flex-direction:column;
        align-items:center;
        padding:20px 0;
        display:none;
        box-shadow:0 8px 20px rgba(0,0,0,0.4);
    }

    .nav-links.active{
        display:flex;
    }

    .hero h1{
        font-size:2rem;
    }

    .logo img{
        width:60px;
    }

    .logo-text{
        font-size:20px;
    }
}
</style>
</head>

<body>

<header id="navbar">
<nav>
    <div class="logo">
        <img src="/images/logo/02 LOGO BAR-RESTO ALADIAH -min.jpg" alt="Logo ALADIAH">
        <span class="logo-text">ALADIAH Restaurant</span>
    </div>

    <div class="menu-toggle" id="mobile-menu">
        <i class="fas fa-bars"></i>
    </div>

    <ul class="nav-links" id="nav-links">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('menu') }}">Menu</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
</header>

<main>

<section class="hero">
    <div class="hero-content">
        <h1>Bienvenue chez ALADIAH</h1>
        <p>La maison du Bomiwo & de la cuisine africaine authentique</p>
        <a href="{{ route('menu') }}" class="btn">Découvrir le Menu</a>
    </div>
</section>

<section>
    <h2>Notre Spécialité : Le Bomiwo</h2>
    <div class="section-content">
        <p>
            Plat emblématique et riche en saveurs, préparé
            avec passion et tradition pour une expérience unique.
        </p>
    </div>
</section>

<section id="contact">
    <h2>Contact</h2>
    <div class="section-content">
        <p><strong>📍 Adresse :</strong> Cotonou / Sètovi, Bénin</p>
        <p><strong>📞 Téléphone :</strong> +229 01 47 47 11 47</p>
    </div>
</section>

</main>

<a class="whatsapp" href="https://wa.me/2290147471147" target="_blank">
<i class="fab fa-whatsapp"></i> WhatsApp
</a>

<footer>
© 2026 – ALADIAH Restaurant
<div class="social-icons">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="https://vm.tiktok.com/ZS9exVcNYoJF6-7rFN9/"><i class="fab fa-tiktok"></i></a>
</div>
</footer>

<script>

/* MENU MOBILE */
const mobileMenu = document.getElementById("mobile-menu");
const navLinks = document.getElementById("nav-links");

mobileMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

/* Fermer le menu après clic */
document.querySelectorAll(".nav-links a").forEach(link => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});

</script>

</body>
</html>
