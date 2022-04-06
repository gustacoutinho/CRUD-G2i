var keeper, controller;
    // método ultilizado para capturar o Id atual do registro e qual controller acessar para realizar a action
    function coletarDados(pivot, id) {
        keeper = id;
        controller = pivot;
    }

    //método ultilizado implementando jQuery.ajax para enviar a requisição e deletar o registro
    function deleta() { 
        var url = "http://localhost/G2i/"+controller+"/delete/" + keeper
        jQuery.ajax({
            url,
            method: "DELETE",
            success: function(){
                window.location.reload()
            }
        })
    }

    //função similar ao deleta(), porém retorna a tela principal do controller atual
    function deletaEdit() {
        var url = "http://localhost/G2i/"+controller+"/delete/" + keeper
        jQuery.ajax({
            url,
            method: "DELETE",
            success: function(){
                window.location.href = "http://localhost/G2i/"+controller
            }
        })
    }