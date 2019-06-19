var dirPath = process.argv[2];
var fileExt = process.argv[3];
var module = require('./teach08_module.js');

module (dirPath, fileExt, function (err, list) {
    if(err)
    {
        console.log(err);
    }
    else
    {
        for(var index = 0; index < list.length; index++)
        {
            console.log(list[index]);
        }
    }
})


