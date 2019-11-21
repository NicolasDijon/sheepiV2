/* Function pour ouvrir la sidenav de connexion */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
  
/* Function pour fermer la sidenav de connexion */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
} 

/* Fonction scroll au clic de la page en cour */
$(function(){
    $("a[href*='#']:not([href='#'])").click(function(){
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1000);
            }
          }
    });
});

/* Ouverture de l'accordeon */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++){
    acc[i].addEventListener("click", function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else{
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

/* Afficher la valeur des sliders */

$('.perso').click(function(){
  $valeur = $('.perso').val();
  $('.val_perso').html($valeur);
  $('.val_perso').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.physique').click(function(){
  $valeur = $('.physique').val();
  $('.val_physique').html($valeur);
  $('.val_physique').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.personnalite').click(function(){
  $valeur = $('.personnalite').val();
  $('.val_personnalite').html($valeur);
  $('.val_personnalite').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.geographie').click(function(){
  $valeur = $('.geographie').val();
  $('.val_geographie').html($valeur);
  $('.val_geographie').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.scolarite').click(function(){
  $valeur = $('.scolarite').val();
  $('.val_scolarite').html($valeur);
  $('.val_scolarite').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.passions').click(function(){
  $valeur = $('.passions').val();
  $('.val_passions').html($valeur);
  $('.val_passions').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.mon_age').click(function(){
  $valeur = $('.mon_age').val();
  $('.val_mon_age').html($valeur + ' ans');
  $('.val_mon_age').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.son_age').click(function(){
  $valeur = $('.son_age').val();
  $('.val_son_age').html($valeur + ' ans');
  $('.val_son_age').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.ma_taille').click(function(){
  $valeur = $('.ma_taille').val();
  $('.val_ma_taille').html($valeur + ' cm');
  $('.val_ma_taille').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

$('.sa_taille').click(function(){
  $valeur = $('.sa_taille').val();
  $('.val_sa_taille').html($valeur + ' cm');
  $('.val_sa_taille').css({
    'color': '#977ac3',
    'font-size': '18px',
    'font-weight': 'bold',
  }) 
})

/* Changer la couleur du background du lien actif de la sidenav desktop */
var url = window.location;

$('.bloc_nav .nav_lien').filter(function() {
    return this.href == url;
}).parent().addClass('active');

/* Changer la couleur du background du lien actif de la navbar mobile */
var url = window.location;

$('.bloc_nav_mobile .nav_lien').filter(function() {
    return this.href == url;
}).parent().addClass('active');

$('.btn_cookies').click(function(){
    $('.div_cookies').slideUp(500);
})






