function scrollToTop() {
    if (document.body.scrollTop !== 0 || document.documentElement.scrollTop !== 0) {
        window.scrollBy(0, -50);
        requestAnimationFrame(scrollToTop);
    }
}


var scrollTopButton = document.getElementById("scrollTopButton");
scrollTopButton.addEventListener("click", function() {
    scrollToTop();
});

window.addEventListener("scroll", function() {
    var scrollThreshold = 200; 
    if (document.body.scrollTop > scrollThreshold || document.documentElement.scrollTop > scrollThreshold) {
        scrollTopButton.style.display = "block";
    } else {
        scrollTopButton.style.display = "none";
    }
});