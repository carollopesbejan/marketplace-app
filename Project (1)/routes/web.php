use App\Http\Controllers\ProductController;

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Rota para exibir a lista de produtos
    Routeindex'])->name('products.index');

    // Rota para exibir o formulário de criação de um novo produto
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

    // Rota para salvar um novo produto no banco de dados
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Rota para exibir um produto específico para edição
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // Rota para atualizar um produto no banco de dados
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    // Rota para excluir um produto do banco de dados
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});
