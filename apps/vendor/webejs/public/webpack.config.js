//var webpack = require('webpack');
module.exports = {
    entry: {
        "dashboard": __dirname + "/page/dashboard.js",
        "dashboard-simple": __dirname + "/page/dashboard-simple.js",
        "form-sample": __dirname + "/page/form-sample.js",
        "port": __dirname + "/page/port.js",
        "add-contact": __dirname + "/page/add-contact.js",
        "add-contact-by-sheet": __dirname + "/page/add-contact-by-sheet.js",
        "add-contact-by-upload": __dirname + "/page/add-contact-by-upload.js",

        "last-broadcast": __dirname + "/page/last-broadcast.js",
        "add-broadcast": __dirname + "/page/add-broadcast.js",
        "list-broadcast": __dirname + "/page/list-broadcast.js",

        "broadcast-message": __dirname + "/page/broadcast-message.js",
        "broadcast-recipients": __dirname + "/page/broadcast-recipients.js",
        "broadcast-recipients-group": __dirname + "/page/broadcast-recipients-group.js",
        "broadcast-recipients-list": __dirname + "/page/broadcast-recipients-list.js",
    },
    output: {
        path: __dirname + "/../../../assets/apps",
        //filename: "[name].min.js", -> for production
        filename: "[name].js",
    }
};