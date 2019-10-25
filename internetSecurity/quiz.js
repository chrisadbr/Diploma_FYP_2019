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
        question : "What does DSS stand for?",
        imgSrc: "../Images/blog7.png",
        choiceA : "Digital Signatute Standards",
        choiceB : "Data Signature Standards",
        choiceC : "Dual System Standards",
        correct : "A"
    },
    {
        question : "What is an enveloped data?",
        imgSrc : "../Images/blog7.png",
        choiceA : "Encrypted content with an accosiated keys",
        choiceB : "Encoded message and signed digest",
        choiceC : "Nesting of signed and encrypted entities",
        correct : "A"
    },
    {
        question : "What is authenticity?",
        imgSrc : "../Images/blog7.png",
        choiceA : "Checking users information to process request",
        choiceB : "Method of verifying users for what they claim they are",
        choiceC : "None of the above",
        correct : "B"
    },
    {
        question : "What is accountability?",
        imgSrc : "../Images/blog7.png",
        choiceA : "Analysing codes",
        choiceB : "The security goal that generates the requirement for actions of an entity to be traced uniquely to that entity",
        choiceC : "encrypting messages",
        correct : "B"
    },
    {
        question : "What are three aspects of security mechanism?",
        imgSrc : "../Images/blog7.png",
        choiceA : "Security mechanism, security services and security attacks",
        choiceB : "Confidentiality, Integrity and Availability",
        choiceC : "Security services, security attacks, Intrusion detection",
        correct : "A"
    },
    {
        question : "What is replay?.",
        imgSrc : "../Images/blog7.png",
        choiceA : "pretend as someone else possibly to get more privileges",
        choiceB : "passively capture data and send later",
        choiceC : "All of the above",
        correct : "B"
    },
    {
        question : "What is access control?",
        imgSrc :   "../Images/blog7.png",
        choiceA : "prevention of the unauthorized use of a resource",
        choiceB : "Way of encryptying messages and decrypting messages",
        choiceC : "peer entity authentication",
        correct : "A"
    },
    {
        question : "What is masquerade?",
        imgSrc :  "../Images/blog7.png",
        choiceA : "pretend as someone else possibly to get more privileges",
        choiceB : "passively capture data and send later",
        choiceC : "prevention the normal use of servers, end users, or network itself",
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