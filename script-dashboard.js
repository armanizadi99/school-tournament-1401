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
  // creating li and lable  | appending lable into li and adding them between ul tag
  var li = document.createElement("li");
  var lable = document.createElement("label");
  lable.name = "question";
  lable.id = "question";
  var inputValue = document.getElementById("myInput").value;
  var text = document.createTextNode(inputValue);
  lable.appendChild(text);
  li.appendChild(lable);
  // creating input for answering and adding them to li
  var inputAnswer = document.createElement("input");
  inputAnswer.type = "text";
  inputAnswer.name = "inputAnswer";
  inputAnswer.id = "inputAnswer";
  inputAnswer.classList = "col-12";
  inputAnswer.placeholder = "short answer ...";
  li.appendChild(inputAnswer);

  // checking the content of q input to create the question or not
  if (inputValue === '') {
    alert("You must write something :|");
  } else {
    // counting the questions | adding
    countQ += 1;
    console.log(countQ);
    document.getElementById("myUL").appendChild(li);
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
      // counting the questions | reduce
      countQ -= 1;
      console.log(countQ);
    }
  }
}

// if submited without any questions entered
function createForm(event) {
  if (countQ == 0) {
    alert("You have not entered any questions! :[");
    event.preventDefault();
    window.history.back();
  } else {
    location.replace("forms.html");
  }
}