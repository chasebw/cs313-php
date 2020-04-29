
var http = require('http');

//req is the request coming from the client
//res is the response object


//This is a javascript object that is a function
//it can be passed as a parameter
//this function will be called whenever there is
// a request from the client



const requestListener = (req,res) => {

    
    console.dir(req,{depth:0});
    console.log(req.url);

    if(req.url == '/home')
    {
        res.write('<h1> Welcome to the Home Page </h1>');
    }
    else if (req.url == '/getData')
    {

        res.writeHead(200,{'Content-Type': 'application/json'});

        var student = { 
            "name": "Chase Wilcox",
            "class": "CS313"
        };

        var json = JSON.stringify(student);

        res.write(json);
    }
    else if (req.url == '/')
    {
        
        res.write(' Hello from different World');

    }
    else 
    {
        res.writeHead(200,{'Content-Type': 'application/json'});
        res.write('<h1> ERROR: 404 Page is not found </h1>');
        res.end();

    }
     
    
    res.end(); //can just put write string here

}

//passing previously declared object as a parameter
var server = http.createServer(requestListener);


//function is declared here to be passed in
const confirmationCallBack = () => {
    console.log("Server is running....");
};

//once listen is called the server get activated
server.listen(8080,confirmationCallBack);



