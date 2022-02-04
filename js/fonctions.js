// Lorsque la page est affichée,
$(document).ready(function()
{
    // Position du scroll de la page initial
    var pos_Scroll_init = {x: 0, y: 0};

    // Valeur qui détermine la destination à laquelle le scroll doit s'arrêter
    var val_Scroll = {x: 0, y: 752};

    // Position du scroll de la page actuel
    var pos_Scroll = pos_Scroll_init;

    // Variable qui détermine si le scroll auto est possible ou non
    var peut_Scroll = true;



    // Initialiser la position du scroll
    window.scrollTo(pos_Scroll_init.x, pos_Scroll_init.y);

    // Si le document détecte que l'on scroll la page,
    document.addEventListener("wheel", descendrePage);



    // Fonction qui permet de baisser la page
    function descendrePage()
    {
        // Chercher la valeur de la hauteur du scroll actuel
        pos_Scroll.y = window.scrollY;

        // Déterminer si l'on scroll vers le bas ou le haut
        wDelta = event.wheelDelta < 0 ? 'bas' : 'haut';

        // Si l'on scroll vers le bas,
        if (wDelta == "bas")
        {
            // Si la position du scroll est égale à sa valeur initiale ET qu'elle est inférieure à celle de sa destination,
            if (pos_Scroll.y == pos_Scroll_init.y && pos_Scroll.y < val_Scroll.y)
            {
                // On peut scroller la page
                peut_Scroll = true;
            }

            // Si le scroll est possible,
            if (peut_Scroll)
            {
                // Baisser le scroll à la valeur choisie
                window.scrollTo(val_Scroll.x, val_Scroll.y);
            }
    
            // Interdire la page de scroller plus loin
            peut_Scroll = false;
        }

        // Sinon,
        else
        {
            // Interdire la page de scroller plus loin
            peut_Scroll = false;
        }
    }
});