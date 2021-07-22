//slides
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);    
}
function currentSlide(n) {
    showSlides(slideIndex = n);    
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('mySlides');
    var dots = document.getElementsByClassName('dot');
    if(n > slides.length){
        slideIndex = 1
    } 
    if (n < 1) {
        slideIndex = slides.length;       
    }
    for (i = 0; i< slides.length; i++) {
        slides[i].style.display = "none";        
    } 
    for (i=0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active","");        
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active"; 
    
}


//MENU ICON
function menuicon(x){
    x.classList.toggle("change")
}
//TABS
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

