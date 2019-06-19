var fs = require('fs');
var fileName = process.argv[2];

var content = fs.readFileSync(fileName);

var string = content.toString();

var array = string.split('\n');

var results = array.length;

console.log(results - 1);