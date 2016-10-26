var config = {}, global = window._wiz_global;

config.urlBase = global.urlBase;
config.urlBaseApi = config.urlBase + 'api/';

config.init = function (callback) {
    callback(config);
};

module.exports = config;
