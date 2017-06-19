/**
 * Created by guilherme.zupolini on 19/06/2017.
 */

validaCampos = function (elementos) {
    var valida = true;
    $('form '+elementos).each(function () {
        $(this).parent('div').removeClass('has-error');
        if($(this).attr('required') && !$.trim($(this).val())){
            $(this).parent('div').addClass('has-error');
            valida = false;
        }
    });
    return valida;
};

voltarTopo = function () {
    $('html, body').animate({scrollTop:0}, 'slow');
};