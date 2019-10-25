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
        question : "What is identity theft?",
        imgSrc: "../Images/id_theft.jpg",
        choiceA : "A crime that an impostor steals your information such as personal ID and uses for personal gains",
        choiceB : "Way of taking out loans in your name",
        choiceC : "A career that is based on hacking",
        correct : "A"
    },
    {
        question : "How do thieves get your information?",
        imgSrc : "../Images/id_theft.jpg",
        choiceA : "Shoulder surfing, social engineering",
        choiceB : "Social engineering, dumpster diving and eaves dropping",
        choiceC : "All the above",
        correct : "C"
    },
    {
        question : "What is social engineering",
        imgSrc : "../Images/id_theft.jpg",
        choiceA : "Is the art of convicing people to reveal their personal information",
        choiceB : "Way of convicing people to vote for a president",
        choiceC : "Sneaking to an uninvited party",
        correct : "A"
    },
    {
        question : "What are types of social engineering?",
        imgSrc : "../Images/id_theft.jpg",
        choiceA : "Human based and computer based",
        choiceB : "Internal and external",
        choiceC : "All the above",
        correct : "A"
    },
    {
        question : "What is eaves dropping?",
        imgSrc : "../Images/id_theft.jpg",
        choiceA : "Way of listening unauthorized conversatiom",
        choiceB : "Way of finding sensitive information in trash bins",
        choiceC : "All the above",
        correct : "A"
    },
    {
        question : "What is dumpster diving?",
        imgSrc : "../Images/id_theft.jpg",
        choiceA : "Way of listening unauthorized conversatiom",
        choiceB : "Way of finding sensitive information in trash bins",
        choiceC : "Way of deceiving people to give out their senseitive information",
        correct : "B"
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

    /*let img = (scorePerCent >= 80) ? "../quizImages/5.png":
              (scorePerCent >= 60) ? "../quizImages/4.png":
              (scorePerCent >= 40) ? "../quizImages/3.png":
              (scorePerCent >= 20) ? "../quizImages/2.png":
              "../quizImages/1.png";*/
    scoreDiv.innerHTML = "<img src=" + img + ">";
    scoreDiv.innerHTML = "<p>"+ scorePerCent + "%</p>";
}