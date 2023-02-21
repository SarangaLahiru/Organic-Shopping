var container=document.querySelector('.container');
var srcbtn=document.getElementById('searchbtn')
var assrc=document.getElementById('src');
var search=document.getElementById('search');
var asssrc1=document.getElementById('asssrc1');
assrc1.style.display="none";


srcbtn.addEventListener('click',function(){
    var item=container.querySelectorAll('.item')
    var search=document.getElementById('search');
    for(var a=0; a<item.length; a++){
        var itemname=item[a].getElementsByTagName('p')[0];
        var searchthing=search.value.toLowerCase();
        var item1=itemname.textContent.toLowerCase();
        var match=item[a].innerHTML||item[a].textContent.toLocaleLowerCase()

        if(match.indexOf(searchthing)>-1){
            item[a].style.display="";
        }
        else{
            item[a].style.display="none";

        }
       
    }
    assrc1.style.display="";
    assrc.innerHTML=search.value;
})