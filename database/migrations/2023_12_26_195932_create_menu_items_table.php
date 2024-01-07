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
		Schema::create('menu_items', function (Blueprint $table) {
			$table->id();
			$table->foreignId("menu_group_id")->constrained("menu_groups")->cascadeOnDelete();
      $table->string('title')->unique();
			$table->nullableMorphs("linkable");
			$table->text("link")->nullable();
			$table->unsignedInteger("order")->nullable();
			$table->boolean("new_tab")->default(false);
			$table->boolean("status")->default(true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('menu_items');
	}
};
