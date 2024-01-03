const header = document.querySelector(".container")
window.addEventListener ("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 120);
});
const body = document.body;
const btn = document.getElementById("coolCheckbox")

btn.addEventListener("click", function(){
    body.classList.toggle("dark")
    
})
