<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create ('tbkomponens',function(Blueprint $tk) {
            $tk->Increments("ID");
            $tk->string("Komponens");
            $tk->string("Fungsi");
            $tk->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExist ('tbkomponens'); 
    }
};
