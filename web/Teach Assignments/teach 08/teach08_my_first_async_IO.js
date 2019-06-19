var fs = require('fs');
var fileName = process.argv[2];
var results;

function loadFile(callback) {
    fs.readFile(fileName, function doneReading(err, content) {
    var string = content.toString();
    var array = string.split('\n');
    results = array.length - 1;
    callback();
    })
}

function displayLog() {
    console.log(results);
}

loadFile(displayLog);