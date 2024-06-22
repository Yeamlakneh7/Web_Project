// let home = document.getElementById('one');
// let about = document.getElementById('two');
// let service = document.getElementById('three');
// let garage = document.getElementById('four');
// let contact = document.getElementById('five');

// home.onmouseover = changeColor;
// about.onmouseover = changeColor;
// service.onmouseover = changeColor;
// garage.onmouseover = changeColor;
// contact.onmouseover = changeColor;

// contact.onmouseout = resetColor;
// service.onmouseout = resetColor;
// about.onmouseout = resetColor;
// garage.onmouseout = resetColor;
// home.onmouseout = resetColor;

// function changeColor() {
//     if (document.getElementById = "two") {}
//     home.style.backgroundColor = "white";
// }

// function resetColor() {
//     home.style.backgroundColor = 'inherit';
// }

const mainButton = document.querySelector(".main-button");
const buttonGroup = document.querySelector(".button-group");

mainButton.addEventListener("mouseenter", () => {
  buttonGroup.classList.remove("hidden");
});

mainButton.addEventListener("click", () => {
  buttonGroup.classList.toggle("hidden");
});
document.addEventListener("mouseover", (event) => {
  if (
    !mainButton.contains(event.target) &&
    !buttonGroup.contains(event.target)
  ) {
    buttonGroup.classList.add("hidden");
  }
});

// Check if the user is logged in
function isUserLoggedIn() {
  // Replace this with your actual login check logic
  return localStorage.getItem("isLoggedIn") === "true";
}

// Function to handle the login/register link click
function handleLoginRegisterLinkClick() {
  // Redirect the user to the login or registration page
  window.location.href = "login.html";
}

// Function to handle the profile link click
function handleProfileLinkClick() {
  // Redirect the user to the profile page
  window.location.href = "profile.html";
}

// Add event listeners to the links
document
  .getElementById("login-register-link")
  .addEventListener("click", handleLoginRegisterLinkClick);
document
  .getElementById("profile-link")
  .addEventListener("click", handleProfileLinkClick);

// Check if the user is logged in and update the UI accordingly
if (isUserLoggedIn()) {
  // Hide the "Register/Sign In" link and show the "Profile" link
  document.getElementById("login-register-link").style.display = "none";
  document.getElementById("profile-link").style.display = "inline";
} else {
  // Show the "Register/Sign In" link and hide the "Profile" link
  document.getElementById("login-register-link").style.display = "inline";
  document.getElementById("profile-link").style.display = "none";
}

/*==============nav toggle========================*/

function toggleMenu() {
  const navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");
}

// JavaScript file to handle dynamic content based on login status

// Function to check login status and update UI
function checkLoginStatus() {
  // Make an AJAX request or fetch API call to determine login status
  // Example using fetch API
  fetch('check_login_status.php')
      .then(response => response.json())
      .then(data => {
          if (data.logged_in) {
              document.getElementById('register-link').style.display = 'none';
              document.getElementById('login-link').style.display = 'none';
              document.getElementById('profile-link').style.display = 'inline';
          } else {
              document.getElementById('register-link').style.display = 'inline';
              document.getElementById('login-link').style.display = 'inline';
              document.getElementById('profile-link').style.display = 'none';
          }
      })
      .catch(error => console.error('Error checking login status:', error));
}

// Call the function on page load or as needed
document.addEventListener('DOMContentLoaded', function () {
  checkLoginStatus();
});
