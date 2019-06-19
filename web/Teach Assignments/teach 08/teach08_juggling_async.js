var http = require('http');
var bl = require('bl');

var url = [];
var asyncCounter = 0;


for(var index = 2; index < process.argv.length; index++) {
    http.get(process.argv[index], function (response) {
        response.pipe(bl(function(error, data) {
            if(error) {
                console.log(error);
            }
            url[index - 2] = data.toString();
            asyncCounter++;
            checkReceived();
        }))
    })
}

function checkReceived() {
    if(asyncCounter == 3) {
        console.log(url[0]);
        console.log(url[1]);
        console.log(url[2]);
    }
}