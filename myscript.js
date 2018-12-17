
$(document).ready(function() {
    $('#body').ready(IE);
    $('#get_author').change(IN);
});
function IE(){
    
}
function IN() {
    $.ajax({
        url: 'view.php',
        type: 'POST',
        data: {
            val: $('#get_author').val()
        }
    }).done(function(data) {
//        $('#content').addClass(animated, slideInleft);
        $('#content').html(data);
    });
}
