<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->createCategories();
        $this->createBrand();
        $this->createProvider();
        $this->createProducts();
    }
    
    public function down()
    {
        Schema::dropIfExists('products');
    }

    /* 
        ****************************************************************************************************
    */

    public function createProducts(){
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('produto');
            $table->string('descricao');
            $table->string('tamanho');
            $table->string('cor');
            $table->integer('quantidade');
            $table->double('valor', 8, 2);
            $table->integer('garantia');
            $table->integer('marca_id');
            $table->integer('categoria_id');
            $table->integer('fornecedor_id');
            $table->string('observacao');
            $table->boolean('status');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->timestamps();
        });
    }

    public function createCategories(){
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    public function createBrand(){
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    }

    public function createProvider(){
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('cnpj');
            $table->string('razao');
            $table->string('telefone');
            $table->string('falarcom');
            $table->timestamps();
        });
    }

}
