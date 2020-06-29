$("#FormCadastro").on('submit',function(event) {
    event.preventDefault();
    var Dados=$(this).serialize();

    $.ajax({
        url: 'Controllers/ControllerCadastro.php',
        Type: 'post',
        dataType: 'html',
        data: Dados,
        success:function(Dados) {
            $('.Resultado').show().html(Dados);
        }
    });
});

/* Confirmar antes de deletar os dados */
$('.Deletar').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');
    
    if(confirm("Deseja mesmo apagar esse Produto?")) {
        window.location.href=Link;

    }else {
        return false;
    }

});
