<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type = "text/javascript" src = "js/admin.js"></script>
    <style>
            label{
                font-size: 18px;
            }
            input[type = "text"]{
                width: 300px;
                height: 32px;
            }
            input[type = "submit"]{
                width: 120px;
                height: 32px;
                background-color: #00BFFF;;
                border: none;
                color: white;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            div{
                padding: 10px;
            }
    </style>
    <title>Add Courses</title>
</head>
<body>
    <form method = "POST">
        <div id="course_result"></div>
        <div id = "admin_form">
            <div>
                <label for="">Course Name:</label>
            </div>
            <div>
                <input type="text" id = "course_name">
            </div>
            <div>
                <label for="">Course Code:</label>
            </div>
            <div>
                <input type="text" id = "code">
            </div>
            <div>
                <input type="submit" value = "ADD COURSE" onclick = "return false"
                onmousedown = "addCourse();" name = "course">
            </div>
        </div>
    </form>
</body>
</html>