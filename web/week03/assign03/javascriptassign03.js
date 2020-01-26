


function checkit(id)
{

    if(document.getElementById(id).checked == true){
        document.getElementById(id).checked = false;
    }
    else
    {
        document.getElementById(id).checked = true;
    }

    document.getElementById("form1").submit();
    
    


}

function submitform()
{


   console.log("submit");
   document.getElementById("form1").submit();



}

function ischeck(item)
{
    if(item.checked == true)
    {
        return true;
    }
    else
    {
        return false;
    }

}

