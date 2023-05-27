$('.w3-navbar').localScroll();

$(document).ready(function() {
    var jQ = jQuery.noConflict();

    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }
    var thanks = GetURLParameter('thanks');
    if (thanks == 'true') {
        jQ('#thanksMessage').removeClass('hidden');
        jQ('#thanksMessage').addClass('visible');

    }
});
