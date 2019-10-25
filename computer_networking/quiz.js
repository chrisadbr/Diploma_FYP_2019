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
        question : "What is computer networking?",
        imgSrc: "../Images/net7.jpg",
        choiceA : "A collection of computing devices that are connected in various ways in order to communicate and share resources",
        choiceB : "Way of sharing resources between a node and host",
        choiceC : "Communication between a server and client",
        correct : "A"
    },
    {
        question : "What is data tranfer rate?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "Refers to the way data passes within a network",
        choiceB : "Refers to the speed data travels within a network",
        choiceC : "All the above",
        correct : "B"
    },
    {
        question : "What is WAN?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A network that connects two or more LANs over large geographical area",
        choiceB : "Communication infrastructure that has been developed in a city or town",
        choiceC : "A network that has been implemented within a building",
        correct : "A"
    },
    {
        question : "What is a file server?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A server that controls traffic of files",
        choiceB : "A dedicated server that sits in the office",
        choiceC : "A server that stores and manages files on a network",
        correct : "C"
    },
    {
        question : "What is a web server?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A computer dedicated to responding for web pages ",
        choiceB : "Server that reside on the web",
        choiceC : "All the above",
        correct : "A"
    },
    {
        question : "What is internet backbone?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A set of high-speed networks that carry Internet traffic",
        choiceB : "A company that provides other companies or individuals with access to the Internet",
        choiceC : "A connection in which transfer speeds are faster than 128 bits per second",
        correct : "A"
    },
    {
        question : "What is a proprietary system?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A system that uses technologies kept private by a particular commercial vendor",
        choiceB : "Systems based on a common model of network architecture and a suite of protocols used in its implementation",
        choiceC : "A connection in which transfer speeds are faster than 128 bits per second",
        correct : "A"
    },
    {
        question : "What is a interoperability?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A system that uses technologies kept private by a particular commercial vendor",
        choiceB : "The ability of software and hardware on multiple machines and from multiple commercial vendors to communicate",
        choiceC : "Systems based on a common model of network architecture and a suite of protocols used in its implementation",
        correct : "B"
    },
    {
        question : "What does TCP stands for?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "Transmission Control Protocol",
        choiceB : "Transmission Communication Protocol",
        choiceC : "Transmission Connection Protocol",
        correct : "A"
    },
    {
        question : "What is a packet?",
        imgSrc : "../Images/net7.jpg",
        choiceA : "A small chunk of data transmitted over the network",
        choiceB : "Small packets of information",
        choiceC : "All the above",
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