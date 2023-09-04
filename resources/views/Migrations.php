php artisan make:migration create_autores_table


    {
        Schema::create('autores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->timestamps();
        });
    }

    php artisan make:migration create_generos_table
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    }

    php artisan make:migration create_livros_table


    Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('genero_id');
            $table->date('data_publicacao')->nullable();
            $table->string('ISBN')->nullable();
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('genero_id')->references('id')->on('generos');
        });

        php artisan make:migration create_descricoes_livro_table

        Schema::create('descricaolivro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livro_id');
            $table->text('descricao');
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livros');
        });
