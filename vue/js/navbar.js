var menu = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function(e) {
    if (window.pageYOffset > menu.offsetTop + 50) {
        if (document.getElementById('userview_background') || document.getElementById('recherche_background')) {
            menu.style.backgroundColor = 'white';
        } else {
            menu.style.backgroundColor = 'black';
            menu.style.boxShadow = "0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28)";
        }
    } else {
        menu.style.backgroundColor = 'transparent';
        menu.style.boxShadow = "none";
    }
});

if (document.getElementById('userview_background') || document.getElementById('recherche_background')) {
	document.getElementById('logo_menu').id = "logo_dark";
}
