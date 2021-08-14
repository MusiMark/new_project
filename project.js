var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} 

//TABS
function openSide2(tabName){
    var i,tabcontent,tablinks;
    
    tabcontent=document.getElementsByClassName("tabcontent");
    for(i=0;i<tabcontent.length;i++){
        tabcontent[i].style.display= "none";
    }
    tablinks=document.getElementsByClassName("tablinks");
    for (i= 0; i<tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active","");
    }
    document.getElementById(tabName).style.display="flex";   
}
function openSide(tabName){
    var i,tabcontent,tablinks;
    
    tabcontent=document.getElementsByClassName("tabcontent");
    for(i=0;i<tabcontent.length;i++){
        tabcontent[i].style.display= "none";
    }
    tablinks=document.getElementsByClassName("tablinks");
    for (i= 0; i<tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active","");
    }
    document.getElementById(tabName).style.display="block";   
}
function openTab(evt, tabName) {
    var i,tabcontent,tablinks;
    
    tabcontent=document.getElementsByClassName("tabcontent");
    for(i=0;i<tabcontent.length;i++){
        tabcontent[i].style.display= "none";
    }
    tablinks=document.getElementsByClassName("tablinks");
    for (i= 0; i<tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active","");
    }
    document.getElementById(tabName).style.display="block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

//MENU ICON
function menuicon(x){
    x.classList.toggle("change")
}
//DROP DOWN
function dropbar(){
    document.getElementById("dropdown").classList.toggle("dropdown-show");
    document.getElementById("account").classList.toggle("imgactive");
}
window.onclick = function removedrop(){
    var m,removedrop,removeAcc;
    removedrop =document.getElementById("dropdown");
    for (m = 0; m<removedrop.length; m++) {
        removedrop[i].className = removedrop[i].className.replace(" dropdown-show","");
    }
    removeAcc=document.getElementById("account");
    for ( m = 0; m < removeAcc.length; m++) {
        removeAcc[i].className = removeAcc[i].className.replace("imgactive","");
    }
}
//SIDE BAR
function openSidebar(){
    document.getElementById("sidebar").style.width="250px";
}
function closeSidebar(){
    document.getElementById("sidebar").style.width="0";
}
document.body.addEventListener('click',closeSidebar,true);
//CART
const cartbtn=document.querySelector(".main-container");
const cartdiv=document.getElementById('cartdiv');

cartbtn.addEventListener('click',cartbox);
cartdiv.addEventListener('click',clear);

function cartbox(event){
    const any =event.target;
    const anyparent= any.parentElement;
if(any.classList[0]==="cartbtn"){


 //create div
 const add_div = document.createElement('div');
 add_div.innerHTML=anyparent.innerHTML;
 add_div.classList.add('cartbox');
  

 //remove btn
 const add_btn=document.createElement('button');
 add_btn.classList.add('removecart');
 add_btn.innerHTML="X";
 add_div.appendChild(add_btn);

 //display
 cartdiv.appendChild(add_div);

 //remove text
 const text=document.getElementById('text');
 text.remove();


}
}
function clear(m){
    const any =m.target;
    if(any.classList[0]==="removecart"){
        const parent= any.parentElement;
        parent.remove();
    }else{
        const text = document.createElement('div');
        text.id.add('text');
        text.innerHTML="No items in cart"
    }
}
//OVERLAY CART
const overlay = document.getElementById('cartdiv');
const overlayBtn = document.getElementById('musiCart');

overlayBtn.onclick= function(){
    if(overlay.innerText == 'No items in cart'){
        alert("No items in cart");
    }else if(overlay.innerText == ''){
        alert("No items in cart");
    }else{
        openCart()
    }
}
function openCart(){
        document.getElementById('myCart').style.display="block";
    }
function closeCart(){
    document.getElementById('myCart').style.display="none";
}

//RADIO BUTTONS
const mobile_money = document.getElementById("mobile_money");
const mobile_money2 = document.getElementById("mobile_money2");
const credit_card = document.getElementById("credit_card");
const credit_card2 = document.getElementById("credit_card2");
const usual_location =document.getElementById("usual_location");
const location1 = document.getElementById("location");
const location2 = document.getElementById("location2");
mobile_money.onclick = function(){
    if(mobile_money.checked){
        mobile_money2.style.display= "flex";
        credit_card2.style.display= "";
    }
}
credit_card.onclick = function(){
    if(credit_card.checked){
        credit_card2.style.display= "block";
        mobile_money2.style.display= "";
    }
}
usual_location.onclick = function(){
    if(usual_location.checked){
        location2.style.display="";
    }
}
location1.onclick = function(){
    if(location1.checked){
        location2.style.display="block"
    }
}
