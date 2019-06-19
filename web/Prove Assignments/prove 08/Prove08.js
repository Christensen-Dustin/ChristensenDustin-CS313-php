// Example 1
/*var http = require('http');

http.createServer(function(request, response) {
    response.writeHead(200);
    response.write("Hello World!!!");
    response.end();
}).listen(8080);

console.log('Listening on PORT 8080 ....');


// Example 2
var http2 = require('http');

http2.createServer(function(request, response) {
    response.writeHead(200);
    response.write("Dog is running.");
    setTimeout(function(){
        response.write("Dog is done.");
        response.end();
    }, 5000);
}).listen(8080);

console.log('Listening on PORT 8080 ....');*/

//console.log("Hello World!!!");

var http = require('http');
var dataJSON = '{"name":"Dustin", "class":"CS 313"}';

function onRequest(request, response) {
    console.log('Received a request for: ' + request.url);
    
    if (request.url == "/home") {
        
        response.writeHead(200, {"Content-Type": "text/html"});
        response.write('<h1>Welcome to the Home Page</h1>');
        response.end();
        
        console.log("Home page was requested");
    }
    else if (request.url == "/getData") {
        
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write('<h1>Here is the data stored in dataJSON</h1>');
        response.write('<h2>Name: ' + dataJSON.name + '</h2>');
        response.write('<h2>Class: ' + dataJSON.class + '</h2>');
        response.write(dataJSON);
        
        response.end();
        
        console.log("The getData page was requested");
    }
    else {
        
        response.writeHead(404, {"Content-Type": "text/html"});
        response.write('<h1>404 - Page Not Found</h1><br><br>');
        response.write('<h3>Please try another page</h3>');
        response.end();
        
        console.log("Anything else was requested");
    }
    
    console.log("Process finished");
}


var server = http.createServer(onRequest);


server.listen(8888);

console.log("The server is now listening on PORT 8888 ...");












