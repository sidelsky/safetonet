var acc = document.getElementsByClassName("accordion"),
i,
panel;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        
        this.parentElement.classList.toggle("active");

        //panel = this.nextElementSibling;

        // if (panel.style.display === "block") {
        //     //panel.style.display = "none";
        // } else {
        //     //panel.style.display = "block";
        // }
    });
}