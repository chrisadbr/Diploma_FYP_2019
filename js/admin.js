//----------Add Course------------------------
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
function addCourseForm(){
    ajax_data("admin/course_mod.php", "course_info", null);   
}
function viewMessages(){
    ajax_data('admin/view_messages.php', 'course_info', null);
}
function viewSubscribers(){
    ajax_data('admin/getSubscribers.php', 'course_info', null);
}
function deleteCourseForm(){
    ajax_data('admin/delCourse.php', 'course_info', null);
}
function deleteCourseForm(){
    ajax_data('admin/delCourse.php', 'course_info', null);
}
function _addBook(){
    ajax_data('admin/addBook.php', 'course_info', null);
}
function sub_Cryptography(){
    ajax_data('admin/cryptography.php', 'course_info', null);
}
function sub_Cryptocurrency(){
    ajax_data('admin/cryptocurrency.php', 'course_info', null);
}
function subCryptanalysis(){
    ajax_data('admin/cryptanalysis.php', 'course_info', null);
}
function identityTheft(){
    ajax_data('admin/identityTheft.php', 'course_info', null);
}
function internetSecurity(){
    ajax_data('admin/internetSecurity.php', 'course_info', null);
}
function hackingPage(){
    ajax_data('admin/hacking.php', 'course_info', null);
}
function computerNetworks(){
    ajax_data('admin/computer_networks.php', 'course_info', null);
}
function anonymous_browsing(){
    ajax_data('admin/anonymousBrowsing.php', 'course_info', null);
}
function cyber_forensics(){
    ajax_data('admin/cyberForensics.php', 'course_info', null);
}
function networkSecurity(){
    ajax_data('admin/network_security.php', 'course_info', null);
}
function virusMalware(){
    ajax_data('admin/virus_and_malware.php', 'course_info', null);
}
function inside_threat(){
    ajax_data('admin/insideThreat.php', 'course_info', null);
}
function delMessage(){
    ajax_data('admin/delMessage.php', 'course_info', null);
}
function deleteBook(){
    ajax_data('admin/delBook.php', 'course_info', null);
}
//-----------------Add Course--------------------
function addCourse(){
    var course_name = document.getElementById("course_name").value;
    var course_code = document.getElementById("code").value;

    var data = new FormData();
    data.append('name', course_name);
    data.append('code', course_code);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById("course_result").innerHTML = xhr.responseText;
        }
    };
    xhr.open('POST', 'process/courseProcess.php');
    xhr.send(data); 
}
//--------------Delete Course--------------------
function delCourse(){

    var id = document.getElementById("id").value;
    var pid = new FormData();
    pid.append('id', id);
    var a = new XMLHttpRequest();
    a.onreadystatechange = function(){
        if(a.readyState == 4 && a.status == 200){
            document.getElementById("response").innerHTML = a.responseText;
        }
    };
    a.open('POST', 'process/delProcess.php');
    a.send(pid);
}
//--------------- Add Book------------------------
/*function addBook(){

    var title = document.getElementById('bookTittle').value;
    var file_name = document.getElementById('fileName').value;
    var uploadBtn = document.getElementById("btnUpload").value;
   // window.prompt(file_name);
    var ad = new FormData();
    ad.append('upload', uploadBtn);
    ad.append('file_title[]', title);
    ad.append('_fileName', file_name);
    var book = new XMLHttpRequest();
    book.onreadystatechange = function(){
         if ( book.status == 200 && book.readyState == 4){
             document.getElementById('book_response').innerHTML = book.responseText;
         }
     };
     book.open('POST', '../Books/bookProcess.php');
     book.send(ad);
}*/
//----------------Delete Message -------------------------
function deleteMessage(){
    
    var email = document.getElementById("email").value;
    var pid = new FormData();
    pid.append('email', email);
    var a = new XMLHttpRequest();
    a.onreadystatechange = function(){
        if(a.readyState == 4 && a.status == 200){
            document.getElementById("response").innerHTML = a.responseText;
        }
    };
    a.open('POST', 'process/deleteMessage.php');
    a.send(pid);
}
function delete_book(){
    
    var book_id = document.getElementById("book_id").value;
    var pid = new FormData();
    pid.append('book', book_id);
    var a = new XMLHttpRequest();
    a.onreadystatechange = function(){
        if(a.readyState == 4 && a.status == 200){
            document.getElementById("response").innerHTML = a.responseText;
        }
    };
    a.open('POST', 'process/deleteBook.php');
    a.send(pid);
}
