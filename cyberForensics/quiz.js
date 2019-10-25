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
        question : "How many communities in digital forensics?",
        imgSrc: "../Images/blog6.jpg",
        choiceA : "There are three communities",
        choiceB : "There are only two communities",
        choiceC : "There are three with the fourth being considered",
        correct : "C"
    },
    {
        question : "What is the primary objective of law enforcement in digital forensics?",
        imgSrc : "../Images/blog6.jpg",
        choiceA : "Available of service",
        choiceB : "Prosecution",
        choiceC : "Making money",
        correct : "B"
    },
    {
        question : "What is cyber forensics?",
        imgSrc : "../Images/blog6.jpg",
        choiceA : "The scientific examination and analysis of digital evidence in such a way that the information can be used as evidence in a court of law",
        choiceB : "Is the secure collection of computer data",
        choiceC : "None of the above",
        correct : "A"
    },
    {
        question : "What is a side channel",
        imgSrc : "../Images/blog6.jpg",
        choiceA : "A channel that an intruder uses",
        choiceB : "Any undesirable way of information exchange between a cryptographic module and its neighbourhood",
        choiceC : "None of the above",
        correct : "B"
    },
    {
        question : "What are 3A's of basic methodology?",
        imgSrc : "../Images/blog6.jpg",
        choiceA : "Acquire, Assign, Attend",
        choiceB : "Acquire, Authenticate, Analyze",
        choiceC : "All the above",
        correct : "B"
    },
    {
        question : "What are types of evidence?",
        imgSrc : "../Images/blog6.jpg",
        choiceA : "Volatile and non-volatile",
        choiceB : "Known and unknown",
        choiceC : "Door to door and online",
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