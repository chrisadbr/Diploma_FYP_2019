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
        question : "What is CIA?",
        imgSrc: "../Images/blog3.jpeg",
        choiceA : "Confidentiality, Integrity, Availability",
        choiceB : "Central Intelligency Agency",
        choiceC : "Confidentiality, Integrity, Assuarance",
        correct : "A"
    },
    {
        question : "What does availabity means?",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "Availability of data in timely manner",
        choiceB : "Data that is not modified by intruders",
        choiceC : "Tendency of not being late for work",
        correct : "A"
    },
    {
        question : "In order to prevent exhaustive key search cryptosystem must have ..",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "must have a large keyspace",
        choiceB : "Data space",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "What is a side channel",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "A channel that an intruder uses",
        choiceB : "Any undesirable way of information exchange between a cryptographic module and its neighbourhood",
        choiceC : "None of the above",
        correct : "B"
    },
    {
        question : "What is cryptanalysis?",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "The breaking of secret codes",
        choiceB : "The art and science of making secret codes",
        choiceC : "All the above",
        correct : "A"
    },
    {
        question : "What is key used for?",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "Key is used to decrypt messages",
        choiceB : "Key is used to encrypt messages",
        choiceC : "Key is used to configure cryptosystem",
        correct : "C"
    },
    {
        question : "What is known plaintext attack?",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "Occurs when an attacker has ciphertext and some of plaintext",
        choiceB : "Way of figuring out plaintext",
        choiceC : "Decryption of plaintext",
        correct : "A"
    },
    {
        question : "What is exhaustive an key search?",
        imgSrc : "../Images/blog3.jpeg",
        choiceA : "Method of searching all possible keys",
        choiceB : "Method of recoring data",
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