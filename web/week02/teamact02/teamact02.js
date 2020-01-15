
function clicked()
{
    document.getElementById("button").innerHTML = "Clicked"
    alert("clicked");
}

function makeGreen()
{
    document.getElementById("div1").style.background = "green";
}

function makeBlue()
{
    document.getElementById("div1").style.background = "blue";
}

function makeRed()
{
    document.getElementById("div1").style.background = "red";
}

function changeColor()
{

    var myColor = document.getElementById("text1").value;
    document.getElementById("div1").style.background = myColor;
    $("div1").css("background", myColor);
    console.log("Color Change!");
}

var x = 2;

function toggle()
{
    
          $("#div1").fadeToggle();
          $("#div2").fadeToggle("slow");
          $("#div3").fadeToggle(3000);
        
}
