// counting the number of questions
var countQ = 0;

// Create a close btn and append it to each list item
var myNodelist = document.querySelectorAll("main.li");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Create a new list item when clicking on the add btn
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);

  if (inputValue === '') {
    alert("You must write something :|");
  } else {
    // counting the questions | adding
    countQ += 1;
    console.log(countQ);
    document.getElementById("myUL").appendChild(li);
    // creating input for answering
    var inputAnswer = document.createElement("input");
    inputAnswer.type = "text";
    inputAnswer.name = "inputAnswer";
    inputAnswer.disabled = true;
    inputAnswer.placeholder = "short answer ...";
    li.appendChild(inputAnswer);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
      // counting the questions | reduc
      countQ -= 1;
      console.log(countQ);
    }
  }
}

// if clicked on create btn without any questions entered
function createForm() {
  if (countQ == 0) {
    alert("You have not entered any questions! :[");
  } else {
    location.replace("forms.html");
  }
}