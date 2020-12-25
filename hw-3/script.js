let highscoreDiv = document.querySelector("#highscore");
let gameTimerEl = document.querySelector("#gameTimer");
let quesTimerEl = document.querySelector("#quesTimer");
let mainEl = document.querySelector("#details");
let timerTab = document.querySelector("#timers");



var test = false;
var score = 0;
var quiz = {};
var quizType = "";

var gameDuration = 0;
var gameSecElapsed = 0;
var gameInterval;

var questionDuration = 20;
var questionSecElapsed = 0;
var questionInterval;


init();

function init() {
  clearDetails();
  reset();
  
  let heading = document.createElement("p");
  heading.setAttribute("id", "main-heading");
  heading.textContent = "Proverite svoje znanje!";

  
  let instructions = document.createElement("p");
  instructions.setAttribute("id", "instructions");
  instructions.textContent = " Dobrodošli u JavaScript kviz iz predmeta Programiranje internet aplikacija. Pred vama je 10 pitanja, pri čemu birate da li odgovarate na pitanje iz opšte kulture ili iz informacionih tehnologija."; 

  // startJsQuiz
  let startOpstaPitanja = document.createElement("button");
  startOpstaPitanja.setAttribute("id", "startOpstaPitanja");
  startOpstaPitanja.setAttribute("class", "btn btn-secondary");
  startOpstaPitanja.textContent= "Kviz opšteg znanja";

  
  let startItPitanja = document.createElement("button");
  startItPitanja.setAttribute("id", "startItPitanja");
  startItPitanja.setAttribute("class", "btn btn-secondary");
  startItPitanja.textContent= "Kviz IT znanja";

  mainEl.appendChild(heading);
  mainEl.appendChild(instructions);
  mainEl.appendChild(startOpstaPitanja);
  mainEl.appendChild(startItPitanja);

  startOpstaPitanja.addEventListener("click", function () {
    quizType = "Kviz opšteg znanja";
    playQuiz(opstaPitanja);
  });

  startItPitanja.addEventListener("click", function () {
    quizType = "Informacione tehnologije";
    playQuiz(itPitanja);
  });
}


function clearDetails() {
  mainEl.innerHTML = "";
}

function reset() {
  quizType = "";
  score = 0;

  gameDuration = 0;
  gameSecElapsed = 0;
  gameInterval;

  questionDuration = 20;
  questionSecElapsed = 0;
  questionInterval;
}


function playQuiz(questionSet) {
  if (test) { console.log("--- playQuiz ---"); }
  
  
  quiz = setUpQuestions(questionSet);

  
  timerTab.setAttribute("style", "visibility: visible;");

  
  gameDuration = quiz.length * 20;
  if (test) { console.log("duration g,q:",gameDuration,questionDuration); }

  startGameTimer();
  renderTime();

  
  presentQuestion();
}


function setUpQuestions(arr) {
  if (test) {console.log("--- setUpQuestions ---");}

  let ranQuest = [];

  for (let i=0; i<arr.length; i++) {
    ranQuest.push(arr[i]);
  }
  return ranQuest;
}

 
function presentQuestion() {
  if (test) {console.log("--- presentQuestion ---");}
  

  
  questionSecElapsed = 0;

  
  if ( quiz.length === 0 ) {
    endOfGame();
    return;
  }

  
  curQuestion = quiz.pop();

  
  clearDetails();
   
  
  let question = document.createElement("h1");
  
  question.setAttribute("question", curQuestion.title);
  question.textContent = curQuestion.title;
  mainEl.appendChild(question)

  
  let choiceBox = document.createElement("ul");
  choiceBox.setAttribute("id","choiceBox");
  mainEl.appendChild(choiceBox);

  
  for( let i=0; i<curQuestion.choices.length; i++ ) {
    
    let listChoice = document.createElement("li");
    
    listChoice.setAttribute("choice-value", curQuestion.choices[i]);
    listChoice.setAttribute("id","questionNum-"+i);
    listChoice.textContent = curQuestion.choices[i];
    
    choiceBox.appendChild(listChoice)
  }

  if (test) { console.log("cur", curQuestion);}

  
  choiceBox.addEventListener("click", function (){
    scoreAnswer(curQuestion);
  });
  
}

function scoreAnswer(cur) {
  if (test) { console.log("--- scoreAnswer ---");}
 
  var e = event.target;
  if ( e.matches("li")) {
    let selectedItem = e.textContent;
    
    if (test) { console.log("selectedItem quiz " + selectedItem); }
    
    if ( selectedItem === cur.answer ) {
      
      score += questionDuration - questionSecElapsed;
      
    } else {
      if (test) { console.log("wrong answer");}
      
      gameDuration -= 10;
    }
  if (test) { console.log("sselected ",selectedItem);}
    showAnswers(cur);
    
  }
}
