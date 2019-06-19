var http = require('http');
var map = require('through-map2');

var port = Number(process.argv[2]);

var server = http.createServer(function(request, response) {
    
    if(request.method() == 'POST') {
        inStream.pipe(map(function(segment) {
            return segment.toString().split(' ').reverse().join(' ')
        })).pipe(outStream);
    }
    
    response.end();
    
});

server.listen(port);