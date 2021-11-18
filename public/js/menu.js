var menu = document.getElementsByClassName('mobille');
var menuIcone = document.getElementById('menu-icone')

menuIcone.addEventListener("click", function(){

    if(menu.style.display == "none"){
        menu.style.display = "block";
    }else{
        menu.style.display = "none";
    }

})

