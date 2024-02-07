// Fade in effect
window.addEventListener('scroll',fade_in);
function fade_in(){
    var elements = document.querySelectorAll('.fadein')
    elements.forEach((element)=>{
        var windowheight = window.innerHeight;
        var elementtop = element.getBoundingClientRect().top;
        if (elementtop < windowheight){
            element.classList.add('active');
        }else{
            element.classList.remove('active');
        }
    })
}