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


// Youtube Modal Box
var modal_button = document.querySelectorAll('.modal-button');
var modal_container = document.getElementById('modal-container');
var modal_close = document.getElementById('close');
var iframe = document.getElementById('iframe');
modal_button.forEach((item)=>{
    item.addEventListener('click',()=>{
        iframe.src = item.value;
        modal_container.style.display = 'flex';
        document.querySelector('body').style.overflow = 'hidden';
        modal_container.addEventListener('click',close);
        modal_close.addEventListener('click',close);
    })
})

function close(){
    iframe.removeAttribute('src')
    modal_container.style.display = 'none'
    document.querySelector('body').style.overflow = 'auto';
}