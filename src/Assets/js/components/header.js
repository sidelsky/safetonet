var w = window,
    header = document.getElementById('header'),
    body = document.getElementById('body'),
    headerHeight,
    title,
    distance,
    top;

    headerHeight = header.offsetHeight;

    //Animated Header
    function animatedHeader() {
        if (w.pageYOffset >= headerHeight) {
            body.classList.add("is-scrolled");
        } else {
            body.classList.remove("is-scrolled");
        }
    }

    //Hero Paralax
    function heroParalax() {
        
        distance = 5;
        title = document.getElementById("title");
        top = w.scrollY;

        if(title) {
            title.style.transform = "translateY(" + +top / distance + "px)";
        }

    }

    w.onscroll = function() {
        animatedHeader();
        heroParalax();
    };


