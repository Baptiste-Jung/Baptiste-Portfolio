let score = 0;
let puissance = 1;
let prix = 10;
let auto_prix = 20;
let gros_prix = 40;
let gros_auto_prix = 80;
let revenu = 0;

let clicsRecents = 0;
let frentique = false;

let compteur_upgrade = 0;
let compteur_auto_upgrade = 0;
let compteur_gros_upgrade = 0;
let compteur_gros_auto_upgrade = 0;

const affscore = document.getElementById('compteur');
const affclick = document.getElementById('perclick');
const affauto = document.getElementById('offline');

const clicbutton = document.getElementById('button');
const upgrade = document.getElementById('amélioration');
const auto_upgrade = document.getElementById('amelio-offline');
const gros_upgrade = document.getElementById('amelio-GrosBoost');
const gros_auto_upgrade = document.getElementById('amelio-offline-GrosBoost');

const upprix = document.getElementById('price');
const auto_upprix = document.getElementById('price-offline');
const gros_upprix = document.getElementById('price-GrosBoost');
const gros_auto_upprix = document.getElementById('price-offline-GrosBoost');

let direction = 8;


clicbutton.addEventListener('click', function () {

    score = score + puissance;
    affscore.innerText = score;

    clicbutton.style.transform = `scale(1.1) rotate(${direction}deg)`;
    direction = direction * -1;
    setTimeout(function () {
        clicbutton.style.transform = `scale(1) rotate(0deg)`;
    }, 80);

    clicsRecents++;

    setTimeout(function () {
        clicsRecents--;
        if (clicsRecents < 10) {
            frentique = false;
        }
    }, 2000);

    if (clicsRecents > 15 && !frentique) {
        frentique = true;
        lancerPluiePotions();
    }

    tropcher();
});

upgrade.addEventListener('click', function () {

    if (compteur_upgrade < 98) {
        if (score >= prix) {
            score = score - prix;
            affscore.innerText = score;
            puissance = puissance + 0.5;
            affclick.innerText = puissance;
            compteur_upgrade = compteur_upgrade + 1;
            if (prix < 500) {
                prix = prix * 2;
                upprix.innerText = prix;
            }

            if (compteur_upgrade === 98) {
                bloquer_upgrade();
            }

            tropcher();
        }
    }
})

setInterval(function () {
    if (revenu > 0) {
        score = score + revenu;
        affscore.innerText = score;

        tropcher();
    }
}, 1000);

auto_upgrade.addEventListener('click', function () {

    if (compteur_auto_upgrade < 100) {
        if (score >= auto_prix) {

            score = score - auto_prix;
            affscore.innerText = score;
            revenu = revenu + 0.5;
            affauto.innerText = revenu;
            compteur_auto_upgrade = compteur_auto_upgrade + 1;
            if (auto_prix < 1000) {
                auto_prix = auto_prix * 2;
                auto_upprix.innerText = auto_prix;
            }

            if (compteur_auto_upgrade === 100) {
                bloquer_auto_upgrade();
            }

            tropcher();
        }
    }
});

gros_upgrade.addEventListener('click', function () {

    if (compteur_gros_upgrade < 100) {
        if (score >= gros_prix) {
            score = score - gros_prix;
            affscore.innerText = score;
            puissance = puissance + 1;
            affclick.innerText = puissance;
            compteur_gros_upgrade = compteur_gros_upgrade + 1;
            if (gros_prix < 2000) {
                gros_prix = gros_prix * 2;
                gros_upprix.innerText = gros_prix;
            } 

            if (compteur_gros_upgrade === 100) {
                bloquer_gros_upgrade();
            }

            tropcher();
        }
    }
});

gros_auto_upgrade.addEventListener('click', function () {

    if (compteur_gros_auto_upgrade < 100) {
        if (score >= gros_auto_prix) {
            score = score - gros_auto_prix;
            affscore.innerText = score;
            revenu = revenu + 1;
            affauto.innerText = revenu;
            compteur_gros_auto_upgrade = compteur_gros_auto_upgrade + 1;
            if (gros_auto_prix < 4000) {
                gros_auto_prix = gros_auto_prix * 2;
                gros_auto_upprix.innerText = gros_auto_prix;
            }
            

            if (compteur_gros_auto_upgrade === 100) {
                bloquer_gros_auto_upgrade();
            }

            tropcher();
        }
    }
});



function tropcher() {
    if (upgrade.disabled === false) {
        if (score >= prix) {
            upgrade.classList.remove('erreur');
        } else {
            upgrade.classList.add('erreur');
        }
    }

    if (auto_upgrade.disabled === false) {
        if (score >= auto_prix) {
            auto_upgrade.classList.remove('erreur');
        } else {
            auto_upgrade.classList.add('erreur');
        }
    }

    if (compteur_upgrade >= 48 ) {
        if (gros_upgrade.disabled && compteur_gros_upgrade < 100) {
            gros_upgrade.disabled = false;
            gros_upgrade.innerText = `Boost click + 1 | Prix ${gros_prix}`;
        }

        if (score >= gros_prix) {
            gros_upgrade.classList.remove('erreur');
        } else {
            gros_upgrade.classList.add('erreur');
        }
    }

    if (compteur_auto_upgrade >= 50 ) {
        if (gros_auto_upgrade.disabled && compteur_gros_auto_upgrade < 100) {
            gros_auto_upgrade.disabled = false;
            gros_auto_upgrade.innerText = `Revenu auto + 1 | Prix ${gros_auto_prix}`;
        }

        if (score >= gros_auto_prix) {
            gros_auto_upgrade.classList.remove('erreur');
        } else {
            gros_auto_upgrade.classList.add('erreur');
        }
    }
}
    


function lancerPluiePotions() {
    for (let i = 0; i < 20; i++) {
        setTimeout(() => {
            if (!frentique) return;

            const potion = document.createElement('img');
            potion.src = 'image/potions.png';
            potion.className = 'potion-jump';

            potion.style.left = Math.random() * 100 + "vw";

            document.body.appendChild(potion);

            setTimeout(() => {
                potion.remove();
            }, 1700);

        }, i * 200);
    }
}

function bloquer_upgrade() {
    upgrade.disabled = true;
    upgrade.classList.add('max');
    upgrade.innerText = 'NIVEAU MAX';
}

function bloquer_auto_upgrade() {
    auto_upgrade.disabled = true;
    auto_upgrade.classList.add('max');
    auto_upgrade.innerText = 'NIVEAU MAX';
}

function bloquer_gros_upgrade() {
    gros_upgrade.disabled = true;
    gros_upgrade.classList.add('max');
    gros_upgrade.innerText = 'NIVEAU MAX';
}

function bloquer_gros_auto_upgrade() {
    gros_auto_upgrade.disabled = true;
    gros_auto_upgrade.classList.add('max');
    gros_auto_upgrade.innerText = 'NIVEAU MAX';
}


tropcher();

gros_upgrade.disabled = true;
gros_upgrade.classList.add('erreur'); 
gros_upgrade.innerText = "Bloqué (25 / click requises)";

gros_auto_upgrade.disabled = true;
gros_auto_upgrade.classList.add('erreur'); 
gros_auto_upgrade.innerText = "Bloqué (25 / click requises)";