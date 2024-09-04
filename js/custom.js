document.getElementById("discover-more").addEventListener("click", function(event) {
    event.preventDefault();
    this.classList.add("active");
    document.getElementById("types-of-tea").scrollIntoView({ behavior: 'smooth' });
});

document.getElementById("fun-button").addEventListener("click", function() {
    document.getElementById("fun-text").style.display = "block";
});