"use strict";

let menu = document.querySelectorAll('#menu > ul > li > a');


menu.forEach(function(item){
    item.addEventListener('mouseover', function(){
        item.style.backgroundColor = "red";
    });
});

menu.forEach(function(item){
    item.addEventListener('mouseleave', function(){
        item.style.backgroundColor = "";
    });
});