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
        question : "Cryptography is the science of ...",
        imgSrc: "../Images/crypto.jpg",
        choiceA : "imagination",
        choiceB : "secret writting",
        choiceC : "all the above",
        correct : "B"
    },
    {
        question : "What is cipher",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Hacking method",
        choiceB : "Method of encrypting messages",
        choiceC : "An algorithm",
        correct : "B"
    },
    {
        question : "What does DES stand for",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Data Encryption Standard",
        choiceB : "Data Engineering Science",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "Cryptanalysiss is the process of ..",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Analysing codes",
        choiceB : "Breaking and analyzing cryptography",
        choiceC : "encrypting messages",
        correct : "B"
    },
    {
        question : "What is a security mechanism?.",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Is a method, tool, or procedure that provide a security services.",
        choiceB : "Method of receiving messages",
        choiceC : "Art of secret wrtiting",
        correct : "A"
    },
    {
        question : "What is plaintext?.",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "A message in its original form.",
        choiceB : "A message that has been encrypted",
        choiceC : "All of the above",
        correct : "A"
    },
    {
        question : "What are two types of encryption?",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Plaintext and symetric.",
        choiceB : "Symetric and assymetric",
        choiceC : "Block cipher and stream cipher",
        correct : "B"
    },
    {
        question : "What is symetric encryptiom?",
        imgSrc : "../Images/crypto.jpg",
        choiceA : "Form of cryptosystem where encryption and description uses the same key",
        choiceB : "Way of deceiving people",
        choiceC : "Method of using different keys for encryption and decryption",
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