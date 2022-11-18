var listbtn=  document.getElementById("toggle");
listbtn.addEventListener("click", function(){
    var navlist=  document.getElementById("navigation");
    navlist.classList.toggle("active");
})

liked= function(e){
    e.classList.toggle("bi-heart");
}
show = function(e){
    var principaleImg= document.getElementById("principal");
    principaleImg.src= e.src;
}


