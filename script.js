let check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmPassword').value) {
    document.getElementById('password').style.border = '2px solid green';
    document.getElementById('confirmPassword').style.border = '2px solid green';
    document.getElementById("registerButton").removeAttribute("disabled");

  } else {
    document.getElementById('password').style.border = '2px solid red';
    document.getElementById('confirmPassword').style.border = '2px solid red';
    document.getElementById("registerButton").setAttribute("disabled", ""); 
  }
}