
    const form = document.getElementById("form");

    form.addEventListener('submit', (e) => {
        // console.log("submited");

        let fname = document.getElementById("firstname").value.trim();
        let lname = document.getElementById("lastname").value.trim();
        let adress = document.getElementById("adress").value.trim();
        let age = document.getElementById("age").value.trim();
        let username = document.getElementById("username").value.trim();
        let passwd = document.getElementById("passwd").value.trim();
        let email = document.getElementById("email").value.trim();
        
        if (fname == null || fname == "" || is_heb(fname) == false || fname.length >= 10){
            document.getElementById('alert').style.visibility = 'visible';
            document.getElementById('alert').style.display = 'block';
            document.getElementById('alert').style.opacity = 1;
            document.getElementById('msg-error').innerHTML = "שם פרטי לא חוקי";
        }

        else if (lname == null || lname == "" || is_heb(lname) == false || lname.length >= 10){
            document.getElementById('alert2').style.visibility = 'visible';
            document.getElementById('alert2').style.display = 'block';
            document.getElementById('alert2').style.opacity = 1;
            document.getElementById('msg-error2').innerHTML = "שם משפחה לא חוקי";
        }

        else if (adress == null || adress == "" || is_heb(adress) == false || adress.length >= 20){
            document.getElementById('alert3').style.visibility = 'visible';
            document.getElementById('alert3').style.display = 'block';
            document.getElementById('alert3').style.opacity = 1;
            document.getElementById('msg-error3').innerHTML = "כתובת מגורים לא חוקית";
        }

        else if (age == null || age == "" || age.length >= 3){
            document.getElementById('alert4').style.visibility = 'visible';
            document.getElementById('alert4').style.display = 'block';
            document.getElementById('alert4').style.opacity = 1;
            document.getElementById('msg-error4').innerHTML = "גיל לא תקין";
        }

        else if (username.charAt(0) == null || validateUserName(username) == false){
            document.getElementById('alert5').style.visibility = 'visible';
            document.getElementById('alert5').style.display = 'block';
            document.getElementById('alert5').style.opacity = 1;
            document.getElementById('msg-error5').innerHTML = "שם משתמש לא חוקי";
        }

        else if (StrengthChecker(passwd) == false||passwd == null || passwd == ""){
            document.getElementById('alert6').style.visibility = 'visible';
            document.getElementById('alert6').style.display = 'block';
            document.getElementById('alert6').style.opacity = 1;
            document.getElementById('msg-error6').innerHTML = "סיסמה לא חוקית, הסיסמה צריכה להכיל לפחות אות קטנה או גדולה וספרה אחת או יותר או תו מיוחד אחד ואורך 8+";
        }

        else if (ValidateEmail(email) == false ||email == null || email == ""){
            document.getElementById('alert7').style.visibility = 'visible';
            document.getElementById('alert7').style.display = 'block';
            document.getElementById('alert7').style.opacity = 1;
            document.getElementById('msg-error7').innerHTML = "מייל לא חוקי";
        }
        else{
            document.getElementById('alert').style.opacity = 0;
                
            $(document).ready(function(){
                $('#form').submit(function(e){
                    $.ajax({
                        type: "POST",
                        url: "./inc/register_form.php",
                        data: $("form").serialize(),
                        success: function(data){
                            console.log("data saved.");
                        }
                    })
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'ההרשמה הצליחה, כנס למשתמש שלך!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    this.reset();
                })
            })      
        }
        e.preventDefault(); 
    })

    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    
    //  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let vaildEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<script>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    function ValidateEmail(email) {

    if (vaildEmail.test(email)){
        return true;
        }else
            return false;
    }


    function is_heb(Field) {

        HebrewChars = new RegExp("^[\u0590-\u05FF]+$");
        AlphaNumericChars = new RegExp("^[a-zA-Z0-9\-]+$");
        EnglishChars = new RegExp("^[a-zA-Z\-]+$");
        LegalChars = new RegExp("^[a-zA-Z\-\u0590-\u05FF ]+$"); //Note that this one allows space 

        if (!LegalChars.test(Field)) {
            return false;
        } else
            return true;
    }

    function validateUserName(username){

        var usernameRegex = /^[a-zA-Z0-9-\u0590-\u05FF]+$/;
        if (usernameRegex.test(username)){
            return true;
        }else
            return false;
    }

    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
    function StrengthChecker(passwd) {

        if(strongPassword.test(passwd)) {
            return true;
        } else {
            return false;
        }
    }