// Performances Modal Box
var img_modal_button = document.querySelectorAll('.img-modal-button');
var img_modal_container = document.getElementById('img-modal-container');
var img_modal_close = document.getElementById('img-close');
var image = document.getElementById('image');
var modal_prev = document.getElementsByClassName('modal-prev-icon');
var modal_next = document.getElementsByClassName('modal-next-icon');
var image_index_number = document.getElementById('image-index-number');
var image_index = 0;

img_modal_button.forEach((item,i)=>{
    item.addEventListener('click',()=>{
        image_index = i;
        image.src = item.value;
        image_index_number.textContent = (image_index+1)+"/"+img_modal_button.length;
        $('#img-modal-container').fadeToggle(500,()=>{
            img_modal_close.addEventListener('click',img_close);
            document.body.addEventListener('keyup',keyboard_input = (ev)=>{
                console.log(ev.key)
                if(ev.key == 'ArrowLeft'){
                    change_index(-1);
                }
                else if (ev.key == 'ArrowRight'){
                    change_index(+1);
                }
                else if (ev.key == 'Escape'){
                    img_close();
                }
            })
        });
        img_modal_container.style.display = 'flex';
        document.querySelector('body').style.overflow = 'hidden';
    })
})

function change_image(n){
    if (image_index >= img_modal_button.length){
        image_index = 0
    }
    else if (image_index < 0){
        image_index = img_modal_button.length - 1;
    }
    img_modal_container.style.display = 'flex';
    image.src = img_modal_button[image_index].value;
    image_index_number.textContent = (image_index+1)+"/"+img_modal_button.length;
}

function change_index(n){
    change_image(image_index += n);
}

modal_prev[0].addEventListener('click',()=>{
    change_index(-1);
})
modal_next[0].addEventListener('click',()=>{
    change_index(+1);
})

function img_close(){
    document.body.removeEventListener('keyup',keyboard_input)
    $('#img-modal-container').fadeOut(500,()=>{
        image.removeAttribute('src');
        document.querySelector('body').style.overflow = 'auto';
    });
}