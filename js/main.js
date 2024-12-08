//video
const player = new Plyr('video');

//burger-con
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

//I don't think that I need it!!!!!!
// document.querySelectorAll('.nav-link').forEach(n => n.addEventListener("click", () => {
//     hamburger.classList.remove("active");
//     navMenu.classList.remove("active");
// }))


//contact-form 
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const message = document.getElementById("message");
const inputs = [fname, lname, email, message];


function validateInputs() {
    let hasError = false;
    
    inputs.forEach(item => {
        if (!item.value.trim()) {
            item.style.borderColor = "red";
            hasError = true;
        } else {
            item.style.borderColor = ""; 
        }
    });

    return hasError;
}


document.getElementById("submit-action").onclick = function () {
    const hasError = validateInputs();

   
    if (!hasError) {
        inputs.forEach(item => {
            item.value = "";
        });

        alert("We'll get in touch soon!");
    }
};


inputs.forEach(item => {
    item.addEventListener("input", function() {
        if (!item.value.trim()) {
            item.style.borderColor = "red"; 
        } else {
            item.style.borderColor = ""; 
        }
    });
});

