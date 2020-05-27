function _(el){
    return document.getElementById(el);
}
function ajax_data(php_file, el, send_data){
    _(el).innerHTML = "Loading...";
    var hr = new XMLHttpRequest();
    hr.open('POST', php_file, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    hr.onreadystatechange = function(){

        if (hr.readyState == 4 && hr.status == 200){
            _(el).innerHTML = hr.responseText;
        }
    };
    hr.send(send_data);
}
/*--------------------Index Page-------------------*/
function subscribe(){
    var s1 = document.getElementById("subscriber").value;

    if(s1 == ""){
        document.getElementById("response").innerHTML = "Please enter email address";s
        return false;
    }else{
        var data = new FormData();
        data.append('email', s1)
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.status == 200 && xhr.readyState == 4){
                document.getElementById("response").innerHTML = xhr.responseText;
            }
        };
        xhr.open("POST", "process/emailProcess.php");
        xhr.send(data);
    }
}
function regButton(){
    location.href = "register.php";
}
function logButton(){
    location.href = "login.php";
}
//------------mainSearch-------------------
function mainSearch(data){

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.status == 200 && xhr.readyState == 4){
            document.getElementById("search_result").innerHTML = this.responseText;
        }
    };
    xhr.open('GET', 'process/main_search.php?str=' + data, true);
    xhr.send();
}
//-------------- Livesearch --------------
function liveSearch(str){

    if(str.length < 1){
        document.getElementById("result").innerHTML = "";
        return true;
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', 'process/data.php?key='+ str, true);
    xhr.send();
}
//------------------Register-------------------
function regUser(){

    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var _email = document.getElementById("email").value;
    var phone = document.getElementById("pNumber").value;
    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;
    var username = document.getElementById("username").value;
    var _dob = document.getElementById("dob").value;

    var formdata = new FormData();
    formdata.append('fname', firstname);
    formdata.append('lname', lastname);
    formdata.append('email', _email);
    formdata.append('pNumber', phone);
    formdata.append('pass1', password1);
    formdata.append('pass2', password2);
    formdata.append('user', username);
    formdata.append('dob', _dob);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.status == 200){
            document.getElementById("errorMsg").innerHTML = xhr.responseText;
        }
    };
    xhr.open('POST', 'process/regProcess.php');
    xhr.send(formdata);
}
//-----------------------Contact Form--------------------
function contactForm(){

    var full_name = document.getElementById("fName").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var msg = document.getElementById("message").value;

    var fData = new FormData();
    fData.append('fullname', full_name);
    fData.append('email', email);
    fData.append('subject', subject);
    fData.append('msg', msg);

    var hr = new XMLHttpRequest();
    hr.onreadystatechange = function(){

        if(hr.readyState == 4 && hr.status == 200){
            document.getElementById("msgError").innerHTML = hr.responseText;
        }
    };
    hr.open('POST', 'process/contact_process.php');
    hr.send(fData);
}
//---------------Blog reg and login----------------------
function _logButton(){
    location.href = "../login.php";
}
function _regButton(){
    location.href = "../register.php";
}
//--------------redirect Button ----------------
function redirect(){
    location.href = "./register.php";
}

