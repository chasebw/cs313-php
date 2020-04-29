
var http = require('http');

//req is the request coming from the client
//res is the response object

var server = http.createServer((req,res) => {
    res.writeHead(200,{'Content-Type': 'text/plain'});
    res.write('Hello from different World');
    res.end();

});

//once listen is called the server get activated
server.listen(8080),() => {
    console.log("Server is running....");
};



