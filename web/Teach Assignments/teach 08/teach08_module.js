var fs = require('fs');
var path = require('path');
var fileList = [];

module.exports = function(dirPath, fileExt, callback){
    
    var extension = '.' + fileExt;
    
    fs.readdir(dirPath, function (err, list)
    {
        if(err)
        {
            return callback(err);
        }
        else
        {
            list.forEach(function (singleItem)
            {
                if(path.extname(singleItem) === extension)
                {
                    fileList.push(singleItem);
                }
            });
            
            return callback(null, fileList);
        }
    });
}