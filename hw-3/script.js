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
