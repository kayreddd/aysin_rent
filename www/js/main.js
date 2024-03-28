// animation curseur
document.addEventListener('DOMContentLoaded', function(){

    let cursor = document.querySelector(".custom-cursor")
    let cursorBefore = document.querySelector(".custom-cursor-before")   

    document.addEventListener('mousemove', function(e){
        cursor.style.left = e.clientX+'px'
        cursor.style.top = e.clientY+'px'
        cursorBefore.style.left = e.clientX+'px'
        cursorBefore.style.top = e.clientY+'px'
    })
})