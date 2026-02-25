<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ALADIAH | Restaurant</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --green:#0f2f25;
    --gold:#c9a24d;
    --light:#faf8f4;
    --dark:#1c1c1c;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Montserrat',sans-serif;background:var(--light);color:var(--dark);}

/* NAVBAR */
nav{
    background:var(--green);
    padding:12px 7%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:1000;
}
.logo{display:flex;align-items:center;gap:15px;}
.logo img{width:80px;border-radius:8px;transition:.3s;}
.logo img:hover{transform:scale(1.05);}
.logo-text{font-family:'Playfair Display',serif;font-size:26px;color:var(--gold);font-weight:600;letter-spacing:2px;}

/* LINKS */
.nav-links{
    display:flex;
    gap:20px;
}
.nav-links a{
    color:white;
    text-decoration:none;
    font-weight:500;
    padding:8px 16px;
    border:2px solid white;
    border-radius:8px;
    transition:.3s;
}
.nav-links a:hover{color:var(--gold);border-color:var(--gold);background:rgba(255,255,255,0.1);}

/* HAMBURGER */
.hamburger{
    display:none;
    font-size:28px;
    color:white;
    cursor:pointer;
}

/* HERO */
header{
    margin-top:80px;
    height:70vh;
    background:linear-gradient(rgba(15,47,37,0.7), rgba(15,47,37,0.7)), url('/images/hero.jpg') center/cover no-repeat;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}
.header-content{max-width:600px;padding:20px;}
.header-logo{width:100px;margin-bottom:20px;border-radius:12px;transition:transform .4s;}
.header-logo:hover{transform:scale(1.1);}
header h1{font-family:'Playfair Display',serif;font-size:2.5rem;margin-bottom:12px;letter-spacing:3px;}
.btn{display:inline-block;background:var(--gold);padding:12px 30px;border-radius:30px;text-decoration:none;color:#000;font-weight:600;transition:.3s;}
.btn:hover{background:var(--green);color:var(--gold);}

/* MENU */
.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
    padding:20px 7%;
}
.menu-card{
    background:white;
    border-radius:12px;
    padding:15px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
    transition:.3s;
}
.menu-card:hover{transform:translateY(-3px);}
.menu-card h3{
    color:var(--green);
    margin-bottom:10px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.menu-card h3::after{
    content:'+';
    font-size:20px;
    color:var(--gold);
    transition: transform 0.3s;
}
.menu-toggle:checked + .menu-label + .menu-list{
    max-height:1000px;
}
.menu-toggle:checked ~ h3::after{
    transform: rotate(45deg);
}
.menu-image-wrapper img{
    width:100%;
    border-radius:12px;
    margin-bottom:10px;
}
.menu-list ul{list-style:none;}
.menu-list li{padding:6px 0;display:flex;justify-content:space-between;border-bottom:1px dashed #ccc;}
.menu-label{
    display:block;
    cursor:pointer;
    color:var(--gold);
    margin:10px 0;
    font-weight:600;
    position:relative;
}
.menu-toggle{display:none;}
.menu-list{
    max-height:0;
    overflow:hidden;
    transition:max-height 0.4s ease;
}

/* DOUBLE IMAGE */
.double-images{
    display:flex;
    gap:10px;
}
.double-images img{
    width:50%;
    border-radius:12px;
}

/* WHATSAPP */
.whatsapp{
    position:fixed;
    bottom:20px;
    right:20px;
    background:#25D366;
    color:white;
    padding:12px 18px;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:8px;
    box-shadow:0 4px 12px rgba(0,0,0,0.3);
    z-index:1001;
}

/* RESPONSIVE MOBILE */
@media(max-width:768px){
    .hamburger{display:block;}
    .nav-links{
        position:absolute;
        top:100%;
        right:0;
        background:var(--green);
        flex-direction:column;
        align-items:center;
        width:100%;
        max-height:0;
        overflow:hidden;
        transition:max-height 0.4s ease;
    }
    .nav-links a{width:90%;text-align:center;margin:10px 0;}
    .nav-links.active{max-height:500px;}
    .double-images{flex-direction:column;}
    .double-images img{width:100%;}
}

/* FOOTER */
footer{
    text-align:center;
    padding:20px;
    background:var(--green);
    color:white;
}
footer .social-icons a{
    color:white;
    margin:0 5px;
    transition:.3s;
}
footer .social-icons a:hover{color:var(--gold);}
</style>
</head>
<body>

<nav>
    <div class="logo">
        <img src="/images/logo/02 LOGO BAR-RESTO ALADIAH-min.jpg" alt="Logo ALADIAH">
        <span class="logo-text">ALADIAH Restaurant</span>
    </div>
    <div class="hamburger"><i class="fas fa-bars"></i></div>
    <div class="nav-links">
        <a href="{{ route('home') }}">Accueil</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<header id="home">
    <div class="header-content">
        <img src="/images/logo/01 LOGO BOMIWÔ TERRAIN-min.jpg" class="header-logo" alt="Logo Bomiwo">
        <h1>Cuisine africaine & diversité culinaire</h1>
        <a href="#menu" class="btn">Voir le menu</a>
    </div>
</header>

<!-- MENU COMPLET -->
<section id="menu">
<h2 style="text-align:center;margin-bottom:20px;color:var(--green);font-family:'Playfair Display',serif;">Notre Menu</h2>
<div class="menu-grid">

<!-- PETIT DEJEUNER -->
<div class="menu-card">
<h3>Petit Déjeuner</h3>
<div class="menu-image-wrapper"><img src="/images/menus/petit-dejeuner-min.jpg"></div>
<input type="checkbox" id="pd" class="menu-toggle">
<label for="pd" class="menu-label">Voir les plats</label>
<div class="menu-list">
<ul>
<li>Thé / Café / Milo <span>500 FCFA</span></li>
<li>Omelette <span>500 FCFA</span></li>
<li>Oeuf dur <span>200 FCFA</span></li>
<li>Chawarma <span>2 000 FCFA</span></li>
</ul>
</div>
</div>

<!-- ENTREES -->
<div class="menu-card">
<h3>Entrées</h3>
<div class="menu-image-wrapper"><img src="/images/menus/entré-min.jpg"></div>
<input type="checkbox" id="entree" class="menu-toggle">
<label for="entree" class="menu-label">Voir les plats</label>
<div class="menu-list">
<ul>
<li>Salade Niçoise <span>2 000 FCFA</span></li>
<li>Salade verte <span>1 500 FCFA / 2 000 FCFA</span></li>
<li>Boulette de viande <span>1 500 FCFA</span></li>
<li>Salade de concombre <span>1 500 FCFA</span></li>
<li>Mix de légume <span>1 500 FCFA</span></li>
<li>Salade ALADIAH à l'américaine <span>2 500 FCFA</span></li>
</ul>
</div>
</div>

<!-- SPÉCIALITÉS AFRICAINES -->
<div class="menu-card">
<h3>Spécialités Africaines</h3>
<div class="menu-image-wrapper"><img src="/images/bomi-min.png"></div>
<input type="checkbox" id="africain" class="menu-toggle">
<label for="africain" class="menu-label">Voir les plats</label>
<div class="menu-list">
<ul>
<li>Bomiwo au poulet complet <span>4 000 / 5 000 / 6 000 FCFA</span></li>
<li>Bomiwo poulet moitié <span>3 500 FCFA</span></li>
<li>Atiékè poisson <span>3 000 / 5 000 FCFA</span></li>
<li>Atiékè poisson Silivi <span>2 500 FCFA</span></li>
<li>Pate noire/blanche avec de légume <span>2 500 FCFA</span></li>
<li>Pate noire/blanche avec crincrin <span>2 000 FCFA</span></li>
<li>Choukouya de poulet <span>5 000 / 6 000 FCFA</span></li>
<li>Assrokoui <span>1 500 / 2 000 FCFA</span></li>
<li>Monyo <span>2 000 / 3 000 FCFA</span></li>
<li>Sauce claire togolaise <span>3 500 FCFA</span></li>
<li>Dakouin <span>3 000 FCFA</span></li>
<li>Sauce d'arachide <span>2 500 FCFA</span></li>
<li>Sauce sésame poulet/poisson <span>2 500 FCFA</span></li>
<li>Kpetè <span>2 500 FCFA</span></li>
<li>Gbota <span>3 000 / 6 000 FCFA</span></li>
</ul>
</div>
</div>

<!-- SPÉCIALITÉS EUROPÉENNES -->
<div class="menu-card">
<h3>Spécialités Européennes</h3>
<div class="menu-image-wrapper"><img src="/images/menus/spécialité-européenne-min.webp"></div>
<input type="checkbox" id="euro" class="menu-toggle">
<label for="euro" class="menu-label">Voir les plats</label>
<div class="menu-list">
<ul>
<li>Jus avec ailerons <span>1 500 / 2 000 FCFA</span></li>
<li>Poulet braisé <span>5 000 / 6 000 FCFA</span></li>
<li>Poisson barre braisé <span>4 000 / 5 000 / 6 000 FCFA</span></li>
<li>Spaghetti <span>1 000 / 1 500 FCFA</span></li>
</ul>
</div>
</div>

<!-- ACCOMPAGNEMENTS -->
<div class="menu-card">
<h3>Accompagnements</h3>
<div class="menu-image-wrapper">
<div class="double-images">
<img src="/images/menus/accompagnement-min.jpg">
<img src="/images/menus/riz au gras.jpg">
</div>
</div>
<input type="checkbox" id="acc" class="menu-toggle">
<label for="acc" class="menu-label">Voir les options</label>
<div class="menu-list">
<ul>
<li>Frite <span></span></li>
<li>Riz blanc <span></span></li>
<li>Riz au gras <span></span></li>
<li>Atiékè <span></span></li>
<li>Pate de mais <span></span></li>
<li>Pate noire <span></span></li>
<li>Piron(Eba) <span></span></li>
<li>Akasswa <span></span></li>
</ul>
</div>
</div>

<!-- DESSERTS & BOISSONS -->
<div class="menu-card">
  <h3>Desserts & Boissons</h3>
  <div class="menu-image-wrapper">
    <img src="/images/menus/boissons-min.jpg" alt="Boissons">
  </div>
  <input type="checkbox" id="dessert" class="menu-toggle">
  <label for="dessert" class="menu-label">Voir la carte</label>
  <div class="menu-list">
<ul>

<!-- COCKTAILS -->
<li><strong>🍹 NOS COCKTAILS ALCOOLISÉS</strong></li>
<li>Mojito <span>2 500 FCFA</span></li>
<li>Sex on the Beach <span>2 500 FCFA</span></li>
<li>Sunrise <span>2 500 FCFA</span></li>
<li>Monaco <span>2 500 FCFA</span></li>
<li>Aladiah Cocktail <span>3 000 FCFA</span></li>
<li>Colorado <span>2 500 FCFA</span></li>

<!-- BIERES PRESSION -->
<li><strong>🍺 NOS BIÈRES PRESSION</strong></li>
<li>0,5 L <span>1 500 FCFA</span></li>
<li>0,3 L <span>1 000 FCFA</span></li>

<!-- JUS -->
<li><strong>🥤 NOS JUS NATURES</strong></li>
<li>Jus d’orange <span>1 000 FCFA</span></li>
<li>Jus de pastèque <span>1 000 FCFA</span></li>
<li>Jus mix <span>1 500 FCFA</span></li>
<li>Jus de bissap <span>1 000 FCFA</span></li>
<li>Menthe au lait <span>1 000 FCFA</span></li>
<li>Jus de coco <span>1 000 FCFA</span></li>

<!-- BOISSONS RAFRAICHISSANTES -->
<li><strong>🥶 BOISSONS RAFRAICHISSANTES</strong></li>
<li>Beaufort 0,66/0,33 <span>700 / 500 FCFA</span></li>
<li>Béninoise 0,66/0,33 <span>600 / 400 FCFA</span></li>
<li>EKU <span>700 FCFA</span></li>
<li>Téquila <span>500 FCFA</span></li>
<li>Flag <span>700 FCFA</span></li>
<li>Sucrerie 0,50/0,33 <span>500 / 400 FCFA</span></li>
<li>Castel <span>600 FCFA</span></li>
<li>Guiness <span>800 FCFA</span></li>
<li>Awayo <span>1 000 FCFA</span></li>
<li>XXL <span>600 FCFA</span></li>
<li>Dopel Noir <span>600 FCFA</span></li>
<li>Dopel Energy <span>500 FCFA</span></li>
<li>Chill <span>600 FCFA</span></li>
<li>Malta <span>500 FCFA</span></li>
<li>Vin Sobebra <span>1 200 FCFA</span></li>
<li>Hagbè <span>600 FCFA</span></li>
<li>Pils 0,65/0,33 <span>800 / 500 FCFA</span></li>
<li>BB Lager <span>800 FCFA</span></li>
<li>Whisky Cola <span>650 FCFA</span></li>
<li>Rox <span>1 000 FCFA</span></li>

<!-- WHISKYS -->
<li><strong>🥃 NOS WHISKYS</strong></li>
<li>Vodka + 2 Sucrerie <span>8 000 FCFA</span></li>
<li>William Lawson <span>10 000 FCFA</span></li>
<li>Orange sec + 2 Sucrerie <span>8 000 FCFA</span></li>
<li>Bourbon + 2 Sucrerie <span>10 000 FCFA</span></li>
<li>Martini <span>8 000 FCFA</span></li>
<li>Label 5 <span>8 000 FCFA</span></li>
<li>Campari <span>15 000 FCFA</span></li>
<li>Jack Daniel + 2 Sucrerie <span>17 000 FCFA</span></li>
<li>Sodabi préparer <span>8 000 FCFA</span></li>
<li>Sodabi conso <span>400 FCFA</span></li>
<li>William Lawson conso <span>2 000 FCFA</span></li>
<li>Red Label <span>18 000 FCFA</span></li>

<!-- VINS -->
<li><strong>🍷 NOS VINS</strong></li>
<li>Château Marlène <span>6 000 FCFA</span></li>
<li>La Faurie <span>8 000 FCFA</span></li>
<li>Haussman (blanc et rouge) <span>12 000 FCFA</span></li>
<li>Grand médoc <span>8 000 FCFA</span></li>
<li>Green lee <span>8 500 FCFA</span></li>
<li>Mouton Cadet <span>15 000 FCFA</span></li>
<li>RLG (promotion) <span>5 000 FCFA</span></li>
<li>Château Sainte Céline <span>8 000 FCFA</span></li>
<li>Prestigium (rouge et blanc) <span>8 000 FCFA</span></li>
<li>La Baume <span>8 500 FCFA</span></li>
<li>Bergerac <span>5 000 FCFA</span></li>
<li>Chemin des Papes <span>11 500 FCFA</span></li>
<li>Côtes du Rhône <span>10 000 FCFA</span></li>
<li>JP Chanet <span>7 000 FCFA</span></li>
<li>Le Chene Grive <span>8 000 FCFA</span></li>
<li>Arme des Princes <span>8 000 FCFA</span></li>
<li>La Rose Cadis <span>8 000 FCFA</span></li>
<li>Baron M <span>8 500 FCFA</span></li>
<li>Moët et Chandon <span>4 500 FCFA</span></li>

<!-- CHAMPAGNES -->
<li><strong>🍾 NOS CHAMPAGNES</strong></li>
<li>F du Lac <span>10 000 FCFA</span></li>
<li>J Roget Champagne Américain <span>25 000 FCFA</span></li>
<li>Champagne Veuve Doussot <span>25 000 FCFA</span></li>

</ul>
</div>
</div>

</ul>

</div>
</section>

<!-- CONTACT -->
<section id="contact" style="padding:40px 7%;background:#f5f5f5;">
<h2>Contact</h2>
<p><strong>📍 Adresse :</strong> Cotonou / Sètovi, Bénin</p>
<p>En quittant <strong>le carrefour Toyota</strong> pour 
<strong>le stade de l’Amitié</strong>, à votre droite 
en allant vers <strong>l’hôpital des policiers</strong>.</p>
<p>Vous verrez sur votre droite <strong>ALADIAH-BOMIOWO TERRAIN</strong>.</p>
<p><strong>📞 Téléphone :</strong> +229 01 47 47 11 47</p>
</section>

<!-- WHATSAPP -->
<a class="whatsapp" href="https://wa.me/2290147471147" target="_blank">
<i class="fab fa-whatsapp"></i> WhatsApp
</a>

<!-- FOOTER -->
<footer>
© 2026 – ALADIAH Restaurant
<div class="social-icons">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="https://vm.tiktok.com/ZS9exVcNYoJF6-7rFN9/"><i class="fab fa-tiktok"></i></a>
</div>
</footer>

<script>
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
hamburger.addEventListener("click", () => {navLinks.classList.toggle("active");});
</script>

</body>
</html>
