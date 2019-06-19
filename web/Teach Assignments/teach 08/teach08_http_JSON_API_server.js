var http = require('http');
var url = require('url');

var port = Number(process.argv[2]);

function parseTime (timeInput) {
    var timeJSON = {"hour": timeInput.getHours(),
                    "minute": timeInput.getMinutes(),
                    "second": timeInput.getSeconds()};
    return timeJSON;
}

function unixTime (timeInput) {
    var unixJSON = {"unixtime": timeInput.getTime()};
    
    return unixJSON;
}

var server = http.createServer(function(request, response) {
    var urlParsed = url.parse(request.url, true);
    var timeInput = new Date(urlParsed.query.iso);
    var outcome;
    
    if (/^\/api\/parsetime/.test(request.url)) {
        outcome = parseTime(timeInput);
    }
    else if (/^\/api\/unixtime/.test(request.url)) {
        outcome = unixTime(timeInput);
    }
    
    if (outcome) {
        response.writeHead(200, {'Content-Type': 'application/json' });
        response.write(JSON.stringify(outcome));
        response.end();
    }
    else {
        response.writeHead(404);
        response.end();
      }    
});

server.listen(port);