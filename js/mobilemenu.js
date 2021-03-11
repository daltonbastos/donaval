var x = document.getElementById("dep-nav");

function showNav()
{
    if (x.style.display == "flex")
        x.style.display = "none";
    else
        x.style.display = "flex";
}

window.addEventListener("resize", function(event) {
    if(screen.width > 900)
        x.style.display = "flex";
    else
        x.style.display = "none";
})