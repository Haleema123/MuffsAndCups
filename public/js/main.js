// Go back to the top button 
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// End of Go back to the top button 


// Edit Information / User Dashboard 
function editInfo() {
  document.getElementById("username").removeAttribute("readonly");
  document.getElementById("email").removeAttribute("readonly");
  document.getElementById("password").removeAttribute("readonly");
  document.getElementById("phone-number").removeAttribute("readonly");
}


// User Dashboard / In Process 
{
  var orderDate = document.getElementsByClassName("current_date");
  date = new Date();
  year = date.getFullYear();
  month = date.getMonth() + 1;
  day = date.getDate();
  for (i = 0; i < orderDate.length; i++) {
    orderDate[i].innerHTML = month + "/" + day + "/" + year;
  }
}


// Sign Up Validation 
let valid = false;
function validateUsername() {
  var username = document.getElementById("username");

  if (username.value.length < 8) {
    username.style.border = "2px solid red";
    return false
  } else {
    username.style.border = "2px solid green";
    return true
  }
}

function validateEmail() {
  var email = document.getElementById("email");

  if (!email.value.includes("@") || !email.value.includes(".com")) {
    email.style.border = "2px solid red";
    return false
  } else {
    email.style.border = "2px solid green";
    return true
  }
}

function validatePassword() {
  var password = document.getElementById("password");
  const lowerCaseLetters = /[a-z]/g;
  const upperCaseLetters = /[A-Z]/g;
  const numbers = /[0-9]/g;

  if (password.value.length >= 8 && password.value.length <= 15 && lowerCaseLetters.test(password.value) && upperCaseLetters.test(password.value) && numbers.test(password.value)) {
    password.style.border = "2px solid green";
    return true;
  } else {
    password.style.border = "2px solid red";
    return false;
  }
}

function validate(){
  if ((validateUsername() && validateEmail()) === true && validatePassword() === true){
    alert("trueeeeeee")
  }else{
    alert("no")
  }

}
// End of Sign Up Validation 



// login Validation 
function loginValidateEmail(){
  var email = document.getElementById("email");

  if (!email.value.includes("@") || !email.value.includes(".com")) {
    email.style.border = "2px solid red";
    valid = false
  } else {
    email.style.border = "2px solid green";
    valid = true
  }
}

function loginValidatePassword(){
  var password = document.getElementById("password");

  if (password.value.length < 8) {
  password.style.border = "2px solid red";
    valid = false
  } else {
    password.style.border = "2px solid green";
    valid = true
  }
}

// End of Login Validation 




// Owl-Carousel / Shoes
$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  })
})  

// End of Carousel / Shoes 