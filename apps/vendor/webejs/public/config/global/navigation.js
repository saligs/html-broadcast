var config = {};

var web = require(__dirname + "/web.js");

config.init = function (callback) {
    $.post(web.urlBaseApi + 'fetch-navigation', function(data){
        console.log(data);
        if(data.status){
            callback(data.data);
        }
    });

};

module.exports = config;