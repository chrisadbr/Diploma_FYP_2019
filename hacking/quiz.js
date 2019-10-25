const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

//create questions
let questions = [
    {
        question : "Who is hacker?",
        imgSrc: "../Images/hacker.jpg",
        choiceA : "An indidual who organizes crimes",
        choiceB : "Intelligent individuals with excellent computer skills, with the ability to create and explore into the computer’s software and hardware",
        choiceC : "An expert in fixing networks",
        correct : "B"
    },
    {
        question : "What is greybox testing?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "The tester if fully aware of the system",
        choiceB : "The tester usually has a limited knowledge of Information",
        choiceC : "The tester has no prior knowledge of the infrastructure to be tested",
        correct : "B"
    },
    {
        question : "What are classes of hackers?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "green, brown and yellow",
        choiceB : "Black, grey and maroon",
        choiceC : "Black, white and grey",
        correct : "C"
    },
    {
        question : "Who are grey hackers?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "Individuals who works both offesively and defensively at times",
        choiceB : "Individuals who works offensively alone",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "What is blackbox testing?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "The tester has no prior knowledge of the infrastructure to be tested",
        choiceB : "The tester usually has a limited knowledge of Information",
        choiceC : "The tester has complete knowledge of the infrastructure that needs to be tested is known.",
        correct : "A"
    },
    {
        question : "Who are white hackers",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "Security analyst",
        choiceB : "Bankers",
        choiceC : "Individuals who works offensively",
        correct : "A"
    },
    {
        question : "What are hacking phases?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "Reconnaissance, Scanning, Reading, Blocking, Covering tracks",
        choiceB : "Reconnaissance, Scanning, Gaining access, Maintaining access, Covering tracks",
        choiceC : "Reconnaissance, Deception, Mantaining access, Covering tracks",
        correct : "B"
    },
    {
        question : "What is penetration testing?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "Method of searching all possible keys",
        choiceB : "Method of testing the system if it works",
        choiceC : "Method of actively evaluating the security of an Information system or network by simulating an attack form a malicious source",
        correct : "C"
    },
    {
        question : "What are types of testing?",
        imgSrc : "../Images/hacker.jpg",
        choiceA : "External testing and internal testing",
        choiceB : "Internal testing only",
        choiceC : "Both",
        correct : "A"
    }
];
// create variables
const lastQuestion = questions.length - 1;
let count = 0;
const gaugeWidth = 150;
const questionTime = 10;
const gaugeUnit = gaugeWidth / questionTime;
let runningQuestion = 0;
let TIMER;
let score = 0;

//render a question
function renderQuestion(){

    let q = questions[runningQuestion];
    question.innerHTML = "<p>"+ q.question + "</p>";
    qImg.innerHTML = "<img src =" + q.imgSrc +">"
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}
start.addEventListener("click", startQuiz);
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();  
    renderCounter();
    TIMER =setInterval(renderCounter, 1000);
}

function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion;
        qIndex++){
            progress.innerHTML += "<div class = 'prog' id =" + qIndex + "></div>";
        }
}

function renderCounter(){

    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            clearInterval(TIMER);
            scoreRender();
        }
    }
}
function checkAnswer(answer){
    if(answer == questions[runningQuestion].correct){
        //if answer is correct
        score++;
        answerIsCorrect();
        //change progress bar to green
    }else{
        answerIsWrong();
        //if is wrong
        //change to red
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        clearInterval(TIMER);
        scoreRender();
    }
}

function answerIsCorrect(){
    document.getElementById(runningQuestion).style.
    backgroundColor = "green";
}

function answerIsWrong(){
    document.getElementById(runningQuestion).style.
    backgroundColor = "red";
}

function scoreRender(){
    scoreDiv.style.display = "block";
    const scorePerCent = Math.round(100 * score / questions.length);

    let img = (scorePerCent >= 80) ? "../quizImages/5.png":
              (scorePerCent >= 60) ? "../quizImages/4.png":
              (scorePerCent >= 40) ? "../quizImages/3.png":
              (scorePerCent >= 20) ? "../quizImages/2.png":
              "../quizImages/1.png";
    scoreDiv.innerHTML = "<img src=" + img + ">";
    scoreDiv.innerHTML = "<p>"+ scorePerCent + "%</p>";
}