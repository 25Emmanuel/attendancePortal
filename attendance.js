const dayHolder = document.querySelector(".day-holder"),
  dateHolder = document.querySelector(".date-holder"),
  table = document.querySelector(".table"), signOutBtn = document.querySelector(".sign-out"),
  signInBtn = document.querySelector(".sign-in");
let monthOfTheYear = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
let daysOfTheWeek = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];

let year = new Date().getFullYear();
let currentDay = new Date().getDay();

let currentDate = new Date().getDate();
let currentMonth = new Date().getMonth();
let date = `${currentDate}-${monthOfTheYear[currentMonth]}-${year}`;


// day on the screen

let dayOnDisplay = document.createElement("h1");
let currentDayOfWeek = daysOfTheWeek[currentDay];
dayOnDisplay.innerHTML = currentDayOfWeek;
dateHolder.appendChild(dayOnDisplay);
let timeOnDisplay = document.createElement("h1");

// time on screen

function time() {
    let hour = new Date().getHours(),
    minutes = new Date().getMinutes(),
    seconds = new Date().getSeconds();
  let time = `${hour}:${minutes}:${seconds}`;
  timeOnDisplay.innerHTML = time;
  dayHolder.appendChild(timeOnDisplay);
}
setInterval(time, 1000);

// disabling buttons at a particular time
if (new Date().getHours() > 9) {
  signInBtn.disabled = true;
}
if (new Date().getHours() < 17) {
  signOutBtn.disabled = true;
}


// date on screen
let dateOnDisplay = document.createElement("h3");
let monthOnDisplay = document.createElement("h1");
let yearOnDisplay = document.createElement("h1");
function todaysDate() {
  dateOnDisplay.innerHTML = currentDate;
  monthOnDisplay.innerHTML = `${monthOfTheYear[currentMonth]}`;
  yearOnDisplay.innerHTML = year;
  dateHolder.appendChild(monthOnDisplay);
  dateHolder.appendChild(dateOnDisplay);
  dateHolder.appendChild(yearOnDisplay);
}
todaysDate();

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