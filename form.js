function ShowHideDiv() {
  var chkYes = document.getElementById("chkYes");
  var dvPassport = document.getElementById("dvPassport");
  dvPassport.style.display = chkYes.checked ? "block" : "none";
}


/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "20px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function valid() {
  if (tel > 11) {
    alert("number must be 11 digits");
  } else if (tel === 11) {
    alert("mobile number valid");
  }
}