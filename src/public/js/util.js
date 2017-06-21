/**
 * Created by guilherme.zupolini on 19/06/2017.
 */

validaCampos = function (elementos) {
    var valida = true;
    $('form ' + elementos).each(function () {
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

limparCampos = function (elementos) {
    $('form ' + elementos).each(function () {
        $(this).val("");

        if($(this).prop("type") == "RADIO" || $(this).prop("type") == "CHECKBOX"){

            $(this).prop("checked", false);

        }
    });
};

msgAlerta = function (tipo, msg, painel) {
  if(tipo == "sucesso"){
      $(painel).removeClass("alert-danger").addClass("alert-success").show()
          .html("<p>" + msg + "<button type='button' class='close' aria-label='Close' id='btnClose'><span aria-hidden='true'>&times;</span></button></p>");
  }else{
      $(painel).removeClass("alert-success").addClass("alert-danger").show()
          .html("<p>" + msg + "<button type='button' class='close' aria-label='Close' id='btnClose'><span aria-hidden='true'>&times;</span></button></p>");
  }

    $('#btnClose').click(function () {
        $(painel).html("").hide();
    });
};