/**
 * Created by nix on 22.06.2015.
 */
//jquery('call-link').click(function () {
//    alert('!');
//});

$(document).ready(function () {
    $('a.call-link').click(function (event) {
            $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url : "http://as.local/stat/web/rest-clicks",
            data: $.toJSON({'object': this.id,'referer':document.referrer})
            //success: function(data, status, jqXHR){
            //    alert('success');
            //},
            //error: function(jqXHR,status){
            //    alert('error');
            //}
        });
    });
});