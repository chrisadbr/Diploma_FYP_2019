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
        question : "What is anonymit?",
        imgSrc: "../Images/3.jpg",
        choiceA : "Anonymit means that real author of the message is unknown",
        choiceB : "Means real author is partly known",
        choiceC : "Botn A and B",
        correct : "A"
    },
    {
        question : "Anonymit is a combination of ... and ....",
        imgSrc : "../Images/3.jpg",
        choiceA : "Unidentifiability and  Unlinkability",
        choiceB : "Unidentifiability and Ambiguity",
        choiceC : "Unlinkability and Non-repudiation",
        correct : "A"
    },
    {
        question : "What is undentifiability?",
        imgSrc : "../Images/3.jpg",
        choiceA : "observers cannot link an agent to a specific message or action",
        choiceB : " observers cannot identify any individual agent",
        choiceC : "None of the above",
        correct : "B"
    },
    {
        question : "What is a remailer?",
        imgSrc : "../Images/3.jpg",
        choiceA : "Enables senders to email back when they receive an email",
        choiceB : "Mechanism that enables email to be sent through a server not be traced",
        choiceC : "Way of replying emails",
        correct : "B"
    },
    {
        question : "Why anonymit is needed on the internet?",
        imgSrc : "../Images/3.jpg",
        choiceA : "Privacy , freedom of speech and anti-censorship",
        choiceB : "Privacy only",
        choiceC : "Just freedom of speech and privacy",
        correct : "A"
    },
    {
        question : "What does TOR stands for?",
        imgSrc : "../Images/3.jpg",
        choiceA : "The Onion Router",
        choiceB : "Tanganyika Operational Relay",
        choiceC : "Transmission of replays",
        correct : "A"
    },
    {
        question : "What does TOR is used for?",
        imgSrc :  "../Images/3.jpg",
        choiceA : "Assuarance of message is deliveredto the right person",
        choiceB : "Tor is designed to protect users from traffic analysis and other kinds of network surveillance",
        choiceC : "Tor is designed as a way to hide hackers information",
        correct : "B"
    },
    {
        question : "What does an I2P stands for?",
        imgSrc :  "../Images/3.jpg",
        choiceA : "Invisible Internet Project",
        choiceB : "International Informative Protocol",
        choiceC : "Internet Invisible Project",
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