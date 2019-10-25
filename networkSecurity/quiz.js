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
        question : "What is a security attack?",
        imgSrc: "../Images/blog1.jpg",
        choiceA : "Any action that compromises the security of information",
        choiceB : "A process / device that is designed to detect, prevent or recover from a security attack",
        choiceC : "A service intended to counter security attacks, typically by implementing one or more mechanisms",
        correct : "A"
    },
    {
        question : "What is a security service?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "A service that promises availabity of data when needed",
        choiceB : "A process / device that is designed to detect, prevent or recover from a security attack.",
        choiceC : "A service intended to counter security attacks, typically by implementing one or more mechanisms",
        correct : "C"
    },
    {
        question : "What is a threat?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Potential violation of security",
        choiceB : "An assault on security system",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "What is an attack?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Potential violation of security",
        choiceB : "An assult on security system",
        choiceC : "All the above",
        correct : "B"
    },
    {
        question : "What are types of attacks?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Passive and active attacks",
        choiceB : "Direct and indirect atttacks",
        choiceC : "All the above",
        correct : "C"
    },
    {
        question : "What is non-repudiation?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Agreement between sender and receiver of message",
        choiceB : "Prevents individual from denying being part of the communication",
        choiceC : "Process of creating strong password for the system",
        correct : "B"
    },
    {
        question : "What are RIP security flaws?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Authentication and transport method",
        choiceB : "Authentication and inside attack",
        choiceC : "Poor management and Transport method",
        correct : "A"
    },
    {
        question : "What is BGP stands for",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Balance Group Protocol",
        choiceB : "Border Gateway Protocol",
        choiceC : "Base Group Ports",
        correct : "B"
    },
    {
        question : "What is denial of service?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Specific attacks that cause server to crash",
        choiceB : "Flooding the server with traffic to disrupt or deny service",
        choiceC : "All the above",
        correct : "C"
    },
    {
        question : "What are security goals?",
        imgSrc : "../Images/blog1.jpg",
        choiceA : "Confidentiality, Integrity and Availability",
        choiceB : "Availability, Non-repudiation and Integrity",
        choiceC : "Integrity, Confidentiality and Non-repudiation",
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