<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('articles', function (Blueprint $table) {
			$table->id();
			$table->foreignId("user_id")->constrained("users")->cascadeOnDelete()->cascadeOnUpdate();
			$table->foreignId("category_id")->constrained("categories")->noActionOnDelete()->cascadeOnUpdate();
			$table->string("title");
			$table->text("summary");
			$table->string("image");
			$table->longText("body");
			$table->string("slug")->nullable();
			$table->string("resource");
			$table->integer("views_count")->default(0);
			$table->boolean("status")->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('articles');
	}
};
