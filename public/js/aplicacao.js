
// Função abaixo está no arquivo ---> views\providers\index.blade.php
function excluirFornecedor(id){
    if(confirm("Deseja excluir esse fornecedor?")){
        window.location.assign("delete-provider/"+id)
    }
}

// Função abaixo está no arquivo ---> views\category\index.blade.php
function excluirCategoria(id){
    if(confirm("Deseja excluir essa Categoria?")){
        window.location.assign("delete-category/"+id)
    }
}
