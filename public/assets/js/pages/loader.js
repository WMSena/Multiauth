function move() {
var elem = document.getElementById("myBar");
//var dinamis = //{{Dinamis}};
var width = 0;
var id = setInterval(frame, 10);
function frame() {
        if (width >= 100)//dinamis 
        {
        clearInterval(id);
        } else 
        {
            width++; 
            elem.style.width = width + '%'; 
            elem.innerHTML = width * 1  + '%';
        }
    }
}