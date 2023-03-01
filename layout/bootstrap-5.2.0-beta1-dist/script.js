//document.addEventListener('load', ()=>{    
  //      load.style.visibility="hidden";
//});
window.addEventListener('scroll', ()=>{
  if (window.scrollY < 10) {
    nav.style.top= 0; 
    nav.style.position= "static";
  } else {
    nav.style.top= "-390px" ;
    nav.style.position= "absolute";
  }
});