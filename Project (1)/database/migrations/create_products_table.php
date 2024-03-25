public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('description');
        $table->string('category');
        $table->decimal('price', 10, 2);
        $table->integer('quantity');
        $table->timestamps();
    });
}