var fs = require('fs');
var path = require('path');

var dirPath = process.argv[2];
var fileExt = '.' + process.argv[3];

var results;

fs.readdir(dirPath, function (err, list) {
    if(err)
    {
        console.log(err);
    }
    for (var index = 0; index < list.length; index++)
    {
        if(path.extname(list[index]) === fileExt)
        {
            results = list[index];
            console.log(list[index]);
        }
    }
});


