
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

// Função abaixo está no arquivo ---> views\brand\index.blade.php
function excluirMarca(id){
    if(confirm("Deseja excluir essa Marca?")){
        window.location.assign("delete-brand/"+id)
    }
}

// Função abaixo está no arquivo ---> views\product\index.blade.php
function excluirProduto(id){
    if(confirm("Deseja excluir essa Produto?")){
        window.location.assign("delete-product/"+id)
    }
}
