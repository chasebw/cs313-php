function check()
{

    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    form = document.getElementById("contact");

    if(pass1 == pass2)
    {
        
        form.submit()

    }
    else
    {


        var error1 = document.getElementById("error1");
        var error2 = document.getElementById("error2");

        error1.style.display = "block";
        error2.style.display = "block";


    }

    


}