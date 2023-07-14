Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string('brand');
    $table->string('model');
    $table->date('date_purchased');
    $table->string('previous_owner');
    $table->string('contact_number');
    $table->string('status');
    $table->string('ownership');
    $table->timestamps();
});
