function check() {




    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var f_name = document.getElementById("fname").value;
    var l_name = document.getElementById("lname").value;
    var user = document.getElementById("user").value;

    var errorfname = document.getElementById("errorfname");
    var errorlname = document.getElementById("errorlname");
    var errorusername = document.getElementById("errorusername");



    form = document.getElementById("contact");


    if (pass1 == pass2 && (f_name != "") && (l_name != "") && (user != "")) {

        form.submit();

    }
    else {


        if (f_name == "") {
            errorfname.style.display = "block";
        }

        if (l_name == "") {
            errorlname.style.display = "block";
        }

        if (user == "") {
            errorusername.style.display = "block";
        }

        if (pass1 != pass2) {

            var error1 = document.getElementById("error1");
            var error2 = document.getElementById("error2");

            error1.style.display = "block";
            error2.style.display = "block";


        }





    }




}