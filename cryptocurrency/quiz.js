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
        question : "What is blockchains?",
        imgSrc: "../Images/cryptocurrency.jpg",
        choiceA : "A ciphersystem that comes in chains",
        choiceB : "Way of making money",
        choiceC : "Technology behind cryptocurrencies",
        correct : "C"
    },
    {
        question : "Who are miners?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Group of people who are digging for gold",
        choiceB : "People who mantain and update blockchains",
        choiceC : "Civilized people",
        correct : "B"
    },
    {
        question : "What are smart contracts?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Contracts that are worthy taking",
        choiceB : "Self-automated computer programs that can carry out the terms of any contract",
        choiceC : "None of the above",
        correct : "B"
    },
    {
        question : "What is DAO?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Distributed Autonomous Organization",
        choiceB : "Data Analyzing Organization",
        choiceC : "Digital Assistant Operator",
        correct : "A"
    },
    {
        question : "Why cryptocurrencies are decentralized?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Way of organizing people",
        choiceB : "To empower people to participate in securing the system",
        choiceC : "They are decentralized to bring new way of living",
        correct : "B"
    },
    {
        question : "What is ICO?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Initial Coin Offering",
        choiceB : "International Community Organization",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "What are cryptocurrencies?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "Representation of a value or assets within a network",
        choiceB : "Data transffered over the network",
        choiceC : "New way of living",
        correct : "A"
    },
    {
        question : "What is coin's white paper?",
        imgSrc : "../Images/cryptocurrency.jpg",
        choiceA : "A detailed proposal created by development team which outlines mechanism and purpose of the coin",
        choiceB : "Documentation about coin",
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