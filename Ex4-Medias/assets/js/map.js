/* Affichage de la région en surbrillance sur la map
*/
function AffReg(id_region)
{
    document.getElementById('map_region').style.background = 'url(assets/images/map/carte'+ id_region +'.gif) no-repeat';
}

/* Desaffichage de la région en surbrillance
*/
function SupReg(id_region)
{
    document.getElementById('map_region').style.background = 'none';
    document.getElementById('infobulle').style.display = 'none';
}


/* Affichage de l'infoBulle
*/
function AffBulle(nom_reg, texte_annonce, e)
{
    if (!e) var e = window.event;

    var obj = document.getElementById('infobulle');

    obj.style.display = 'block';
    obj.innerHTML = '<span class="titre_infobulle">'+ nom_reg +'</span><br /><span class="texte_infobulle">'+ texte_annonce +'</span>';

    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY;
    }
    else if (e.clientX || e.clientY) {
        posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        posy = e.clientY + document.body.scrollTop 	+ document.documentElement.scrollTop;
    }

    var leftPos = posx - 0;

    if (leftPos < 0) leftPos = 0;

    obj.style.left = leftPos + 'px';
    obj.style.top = posy - obj.offsetHeight - 3 + 'px';
}



