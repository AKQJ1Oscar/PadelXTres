// Hace que el icono previo al seleccionado en el dock también aumente ligeramente de tamaño (igual que el icono posterior al seleccionado en el dock)
function addPrevClass (e) {
    var target = e.target;
    if(target.getAttribute('src')) { // check if it is img
        var li = target.parentNode.parentNode;
        var prevLi = li.previousElementSibling;
        if(prevLi) {
            prevLi.className = 'prev';
        }
    
        target.addEventListener('mouseout', function(){
            if(prevLi) {
                prevLi.removeAttribute('class');
            }
        }, false);
    }
}
if (window.addEventListener) {
    document.getElementById('dock').addEventListener('mouseover', addPrevClass, false);
}    
// print user-agent string
document.getElementById('ua-string').innerHTML = navigator.userAgent;