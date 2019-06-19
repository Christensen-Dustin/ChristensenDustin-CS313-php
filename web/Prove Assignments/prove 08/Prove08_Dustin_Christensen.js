var http = require('http');
var dataJSON = '{"fName":"Dustin", "lName":"Christensen", "class":"CS 313"}';
var contentJSON = JSON.parse(dataJSON);

function onRequest(request, response) {
    console.log('Received a request for: ' + request.url);
    
    if (request.url == "/home") {
        
        response.writeHead(200, {"Content-Type": "text/html"});
        
        response.write('<h1>Welcome to the Home Page</h1>');
        response.write('<h3>This page is part of the Prove 08 Assignment</h3>');
        response.write('<div style="background-color:powderblue;">This page was created by:<br>');
        response.write('<h2>' + contentJSON.fName + '</h2>');
        response.write('For the class:<br>');
        response.write('<h2>' + contentJSON.class + '</h2></div>');        
        
        response.end();
        
        console.log("Home page was requested");
    }
    else if (request.url == "/getData") {
        
        response.writeHead(200, {"Content-Type": "application/json"});
        
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