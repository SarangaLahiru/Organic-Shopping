var act=document.querySelector('.act')
var home=document.getElementById('home')
var slides=document.querySelectorAll('.slide')
var radbtn=document.querySelectorAll('.rad-btn')
var intTime=5000;
var slideInt;
console.log(slides)
home.addEventListener('click',function(e){
    e.preventDefault();
    act.classList.toggle('ac')
})

function nextSlide(){
    var curr=document.querySelector('.curr')
    var active=document.querySelector('.active')
    curr.classList.remove('curr')
    active.classList.remove('active')
    if(curr.nextElementSibling){
        curr.nextElementSibling.classList.add('curr')
        active.nextElementSibling.classList.add('active')
    }
    else{
        slides[0].classList.add('curr')
        radbtn[0].classList.add('active')
       
        
    }
}
slideInt=setInterval(nextSlide,intTime);


var catogery=document.querySelectorAll('.catogery')
var left1=document.querySelectorAll('.left1')
var right1=document.querySelectorAll('.right1')
var slideInt1;

catogery.forEach((item,i)=>{
    var prewid=item.getBoundingClientRect();
    var wid=prewid.width

    left1[i].addEventListener('click',function(e){
        e.preventDefault();
        item.scrollLeft-=wid;
    })
    right1[i].addEventListener('click',function(e){
        e.preventDefault();
        item.scrollLeft+=wid;
    })
    console.log(prewid);
    
})
function cat(){
    catogery.forEach((item,i)=>{
        var prewid=item.getBoundingClientRect();
        var wid=320
    
        
          
            item.scrollLeft+=wid;
            if(item.scrollLeft==1800){
                item.scrollLeft=0;
            }
        
        console.log(item.scrollLeft);
        
    })
    

}
slideInt1=setInterval(cat,3000);
function clrInterval(){
    clearInterval(slideInt1)

}
var catogery1=document.querySelectorAll('.product')
var left2=document.querySelectorAll('.left2')
var right2=document.querySelectorAll('.right2')


catogery1.forEach((item,i)=>{
    var prewid=item.getBoundingClientRect();
    var wid=prewid.width

    left2[i].addEventListener('click',function(e){
        e.preventDefault();
        item.scrollLeft-=wid;
    })
    right2[i].addEventListener('click',function(e){
        e.preventDefault();
        item.scrollLeft+=wid;
    })
    console.log(prewid);
    
})



window.addEventListener('scroll',function(){
    var header1=document.querySelector('.header1');
    header1.classList.toggle('hd',window.scrollY > 0)
    
})

