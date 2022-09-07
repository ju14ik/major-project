// GET THE DAY NUMBER
// get the day number from a new date object
// assign to a variable
var today = new Date().getDay();

// MATCH DAY NUMBER WITH NODE LIST INDEX
// Sunday is the first JavaScript day but it's
// the last day in our list so change 0 to 6
// and decrement all other day numbers so they
// match with the node list indexes
if (today === 0){
  today = 6;
}else{
  today--;
}

// SELECT ALL DTs & DDs
// select all the definition term elements
// assign to a variable
var ths = document.querySelectorAll('th');
// select all the definition data elements
// assign to a variable
var tds = document.querySelectorAll('td');

// ADD A CLASS TO TODAYS DT & DD
// use the day number (today variable) to add
// a class to the appropriate dt and dd elements
// so they can be styled in CSS (.today)
ths[today].className = 'today';
tds[today].className = 'today';
// node lists begin at 0, so day 1 in our list
// (Monday) will be node 0

// Calling function on window loading
window.onload = function () {
    SetOpeningClosingMessage(); //Make sure the function fires as soon as the page is loaded
    setTimeout(SetOpeningClosingMessage, 600000); //Then set it to run again after ten minutes
}

function SetOpeningClosingMessage(){     
    var nowDate = new Date();    
    var openingTime = new Date();        
    var closingTime = new Date();   
    var isWorkingDay = true;  

    switch (true) {
        // Mon - Thur
        case (today < 4):
            openingTime.setHours(9, 0, 0);   // Set hours, minutes and seconds
            closingTime.setHours(17, 0, 0);   // Set hours, minutes and seconds
            break;
        // Fri
        case (today == 4):
            openingTime.setHours(8, 0, 0);   // Set hours, minutes and seconds
            closingTime.setHours(18, 0, 0);   // Set hours, minutes and seconds
            break;
        // Sat
        case (today == 5):
            openingTime.setHours(10, 0, 0);   // Set hours, minutes and seconds
            closingTime.setHours(16, 0, 0);   // Set hours, minutes and seconds
            break;
        // Sun - closed
        case (today == 6):
            isWorkingDay = false;
            break;
        default:
            alert("none");
            break;
    }

    var openClosedElement = document.getElementById("open-or-closed");
    openClosedElement.style.paddingTop = "10px";
    openClosedElement.style.marginTop = "10px";
    openClosedElement.style.backgroundColor = "#fff59c";

    if(nowDate > openingTime && nowDate < closingTime && isWorkingDay) {
        openClosedElement.innerText = "We are currently open";
    }else{
        openClosedElement.innerText = "We are currently closed";
    }
}










