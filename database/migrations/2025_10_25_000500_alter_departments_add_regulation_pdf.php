<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::table('departments', function (Blueprint $table) {
			$table->string('regulation_pdf')->nullable()->after('director_image');
		});
	}

	public function down(): void
	{
		Schema::table('departments', function (Blueprint $table) {
			$table->dropColumn('regulation_pdf');
		});
	}
};


