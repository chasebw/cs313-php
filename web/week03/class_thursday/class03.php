<!-- NOTES -------------------------------------------
    
    
    stored on client computer information about the user
A server script sends name,age, identification # to a browser 

setcookie(name,value,expire,path,domain,security);

setcookie("name","JohnWatkin", time()+3600);

Http Sessions
   - HTTP sessions - allows web servers to maintain user identity, and to store user specific data during multiple request/response
   - data persists while user uses a site

Cookies are saved on the client
Sessions are saved on the server

- sessions keep data across subsequent access
- some store this information in databases - some store this information in sessions


php  session_start();


$_SESSION[''];

Cookie is a bit of data stored by the browser accesible by the browser persist after browser closes

Session 
-more secure
- not accessible to javascript
- perfect for sensitive data

Many websites use a mix of both

One way is to use a post - to refresh the page


-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>





    
</body>
</html>