//COMMENTS
const send =document.querySelector("#sendbtn");
const chat_container =document.querySelector(".chat_container");
const chat_input = document.getElementById('chat_input');

send.addEventListener('click',add_box);

function add_box(){
    const add_div = document.createElement('div');
    add_div.classList.add('chat_area')
    chat_container.appendChild(add_div);

    const add_div2 =document.createElement('div');
    add_div2.classList.add('chat_box');
    add_div2.innerHTML= chat_input.value;
    add_div.appendChild(add_div2);

    const add_div3 =document.createElement('div');
    add_div.appendChild(add_div3);

    const small1 = document.createElement('small');
    small1.innerHTML="musimark";
    add_div3.appendChild(small1);
    const small2 = document.createElement('small');
    small2.innerHTML="10 minutes ago";
    add_div3.appendChild(small2);

    
    chat_input.value= ""
}


