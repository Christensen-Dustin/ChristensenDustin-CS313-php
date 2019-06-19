var net = require('net');
var input = process.argv[2];
var date = new Date();
var dateInfo = "";

function fillSpace (num) {
    if(num < 10) {
        return '0' + num;
    }
    else {
        return num;
    }
}

var server = net.createServer(function(socket) {
    
    dateInfo = date.getFullYear() + '-' +
    fillSpace(date.getMonth() + 1) + '-' +
    fillSpace(date.getDate()) + ' ' +
    fillSpace(date.getHours()) + ':' +
    fillSpace(date.getMinutes()) + '\n';
    
    socket.write(dateInfo);    
    socket.end();
});

server.listen(Number(input));