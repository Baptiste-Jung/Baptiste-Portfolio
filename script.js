const miniatures = document.querySelectorAll('.zone__miniature .miniature, .zone__miniature .miniature__active');

const zoneAffichage = document.getElementById('img__skill');
const titrePrincipal = zoneAffichage.querySelector('h1');
const titreSecondaire = zoneAffichage.querySelector('h2');
const texteStatut = zoneAffichage.querySelector('p');

const zoneText = document.getElementById('desc__skill');

miniatures.forEach(miniature => {
    miniature.addEventListener('click', () => {
        const titre = miniature.getAttribute('titre');
        const cat = miniature.getAttribute('cat');
        const tal = miniature.getAttribute('tal');
        const img = miniature.getAttribute('img');
        const desc = miniature.getAttribute('desc');

        titrePrincipal.textContent = cat;
        titreSecondaire.textContent = titre;
        texteStatut.textContent = tal;
        zoneAffichage.style.backgroundImage = `url("${img}")`;
        zoneText.innerHTML = desc;

    });
});