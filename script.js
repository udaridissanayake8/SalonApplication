let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = 
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100)/calcHeight);
    if(pos > 220){
        scrollProgress.style.display = "grid";
    } 
    else{
        scrollProgress.style.display = "none";
    }

    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(rgb(205, 0, 78) ${scrollValue}%,rgb(68, 2, 38) ${scrollValue}%)`;
};

window.onscroll= calcScrollValue;
window.onload= calcScrollValue;

// loader
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");
    loader.addEventListener("transitionend", () => {
        document.body.removeChild("loader");
    });
})

var blocks =document.getElementsByClassName("block");
var container = document.getElementsByClassName("container");
var hs =new HorizontalScroll.default({
    blocks: blocks,
    container: container,
    isAnimated: true,
    springEfect: 0.8,
});

//frogot password
function sendResetEmail() {
    const email = document.getElementById("email").value;

    if (!email) {
        alert("Please enter your email.");
        return;
    }

    
    if (!email.includes("@")) {
        alert("Please enter a valid email address.");
        return;
    }

    
    alert(`A password reset link has been sent to ${email}.`);
    document.querySelector(".popup").style.display = "none";
}
