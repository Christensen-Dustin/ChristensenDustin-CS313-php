var http = require('http');
var fs = require('fs');

var port = process.argv[2];
var file = process.argv[3];

var server = http.createServer(function (request, response) {
    
    response.writeHead(200, {"Content-type":"text/http"});
    
    var search = fs.createReadStream(file);
    search.pipe(response);
    
    //response.end();    
});

server.listen(Number(port));