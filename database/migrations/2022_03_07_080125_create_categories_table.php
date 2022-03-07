<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    //schéma pour la table Category
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('name');
            $table->String('slug');
        });

    //Notre category va être en relation avec nos produits donc on va mettre en place ce lien
        Schema::table('products', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            //convention: nom du model qui va être lié au singulier + unsigned = pas de signe/pas négatif + index = c'est un index
            //va donc s'intégrer à la table products
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
