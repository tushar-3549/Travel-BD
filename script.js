var bookNowBtn = document.getElementById('bookNowBtn');

bookNowBtn.addEventListener('click', function () {
    alert('Thank you for booking!');
});

const input = document.querySelector("input");
input.addEventListener("focus", function () {
    console.log("focus occured here");
});
input.addEventListener("focusin", function(){
    console.log("focusin occured here");
});
input.addEventListener("focusout", function(){
    console.log("focusout occured here");
});

const textarea = document.querySelector("textarea");
textarea.addEventListener("keydown", function(){
    console.log("keydown");
});
textarea.addEventListener("keypress", function(){
    console.log("keypressed");
});
