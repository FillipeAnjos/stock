
// Função abaixo está no arquivo ---> views\providers\index.blade.php
function excluirFornecedor(id){
    if(confirm("Deseja excluir esse fornecedor?")){
        window.location.assign("delete-provider/"+id)
    }
}
