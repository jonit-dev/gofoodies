var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

// console.log(getUrl.origin);
// console.log(baseUrl);


var app = angular.module('goFoodies', []).constant('CONFIG', {
    'APP_NAME': 'goFoodies',
    'APP_VERSION': '0.0.1',
    'GOOGLE_ANALYTICS_ID': '',
    'BASE_URL': getUrl.origin,
    'URL': getUrl.origin,
    'API': `${getUrl.origin}/api`,
    'SYSTEM_LANGUAGE': 'pt-br'
});


