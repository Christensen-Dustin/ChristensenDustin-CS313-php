var http = require('http');
var bl = require('bl');
var url = process.argv[2];

http.get(url, function (response) {
    response.pipe(bl(function(error, data) {
        if(error) {
            console.log(error);
        }
        console.log(data.toString());
    }))
})
        