$(function(){
    var elem = $(".status");
        var elem_length = elem.length;
        for (let i=0; i<elem_length; i++){
            attachment(elem[i]);
        }
});

function attachment(elem){
    $(elem).click(function(){
        var  id  = $(elem).val();
        $.post("/TEST/backend/order/status",
            {
                'id': id
            },
            function(data, status){
                if (!data){
                    elem.checked = false;
                    alert('Ошибка изменения статуса.');
                } else {
                    $(elem).attr('disabled', 'disabled');
                }
            }
        );
    })
}