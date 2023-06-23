let myButton=document.getElementById('btn-back-to-top')
window.onscroll=function(){
    scrollFunction()
}
function scrollFunction(){
    if(document.body.scrollTop >20 || document.documentElement.scrollTop >20){
        myButton.style.display='block'
    }else{
        myButton.style.display='none'
    }
}
document.getElementById('btn-back-to-top').onclick=function(){
    document.body.scrollTop=0   
    document.documentElement.scrollTop=0
}

// typing text
    const text =document.querySelector('.sec-text')
    const textLoad =() => {
        setTimeout(() => {
            text.textContent = "Reliable IT Solutions"
        }, 0);
        setTimeout(() => {
            text.textContent = "Contact us"
        }, 4000);
        setTimeout(() => {
            text.textContent = "Turn it to software"
        }, 8000);
    }
    textLoad()
    setInterval(textLoad, 12000);