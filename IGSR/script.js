//responsive navi
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");
const dropDownMenu = document.querySelector(".dropdownMenu");

const bellButton = document.querySelector(".notific");
const nofiticationBox = document.querySelector(".notification-box");

menuBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
    dropDownMenu.classList.toggle("active");
});

const body = document.querySelector("body");

bellButton.addEventListener("click", (event) => {
    event.stopPropagation();
    nofiticationBox.classList.add("active");
});

body.addEventListener("click", () => {
    nofiticationBox.classList.remove("active");
    menuBtn.classList.remove("active");
    navigation.classList.remove("active");
    dropDownMenu.classList.remove("active");
});

nofiticationBox.addEventListener("click", (event) => {
    event.stopPropagation();
});


document.addEventListener("DOMContentLoaded", function() {
    const allowedPathsSignIn = [
        "/",
        "/index.php",
        "/signup.php",
    ];
    const allowedPathsSignUp = [
        "/signinOfficer.php",
        "/signin.php",
    ];
    const allowedPathsCitizenProfileIcn = [
        "/service1.php",
        "/service2.php",
        "/service3.php",
        "/service4.php",
        "/service5.php",
        "/service6.php",
        "/service7.php",
        "/service8.php",
        "/citizenProfile.php",
    ];
    const allowedPathsOfficerProfileIcn = [
        "/officerProfile.php",
        "/service.php",
    ];

    const currentPath = window.location.pathname;

    // Log the current path to debug
    console.log("Current Path: ", currentPath);

    // Check if the current path is in the list of allowed paths and log the results
    if (allowedPathsSignIn.includes(currentPath)) {
        console.log("SignIn allowed on this page");
        document.getElementById("signin").style.display = "block";
        document.getElementById("signinD").style.display = "block";
        document.getElementById("dropmenu-line-T").style.display = "none";
    }
    if (allowedPathsSignUp.includes(currentPath)) {
        console.log("SignUp allowed on this page");
        document.getElementById("signup").style.display = "block";
        document.getElementById("signupD").style.display = "block";
        document.getElementById("dropmenu-line-T").style.display = "none";
    }
    if (allowedPathsCitizenProfileIcn.includes(currentPath)) {
        console.log("Citizen Profile Icon allowed on this page");
        document.getElementById("citizen-pro").style.display = "block";
        document.getElementById("citizen-proD").style.display = "block";
        document.getElementById("dropmenu-line-T").style.display = "block";
        document.querySelector(".profile-details").style.display = "block";
        document.getElementById("signOut").style.display = "block";

    }
    if (allowedPathsOfficerProfileIcn.includes(currentPath)) {
        console.log("Officer Profile Icon allowed on this page");
        document.getElementById("officer-pro").style.display = "block";
        document.getElementById("officer-proD").style.display = "block";
        document.getElementById("dropmenu-line-T").style.display = "block";
        document.querySelector(".profile-details").style.display = "block";
        document.getElementById("signOut").style.display = "block";
    }
});


//header scroll
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        header.classList.add('shadow');
    } else {
        header.classList.remove('shadow');
    }
});
