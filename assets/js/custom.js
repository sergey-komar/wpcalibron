window.addEventListener('DOMContentLoaded', () => {
var element3 = document.getElementById('input-mask3');
var element = document.getElementById('input-mask');

var maskOptions = {
	mask: '+{7}(000)000-00-00'
};

if(element){
    var mask = IMask(element, maskOptions); 
}
if(element3){
    var mask3 = IMask(element3, maskOptions);
}

})