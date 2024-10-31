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
        DB::statement('
            CREATE OR REPLACE FUNCTION insert_users_categories()
            RETURNS TRIGGER AS $$
            BEGIN
                INSERT INTO users_categories (user_id, category_id, subcategory_id, show)
                SELECT
                    NEW.id,
                    mc.id AS category_id,
                    ms.id AS subcategory_id,
                    true AS show
                FROM
                    ms_categories mc
                JOIN
                    ms_subcategories ms ON ms.category_id = mc.id;
                RETURN NEW;
            END;
            $$ LANGUAGE plpgsql;
        ');

        DB::statement('
            CREATE TRIGGER after_users_insert
            AFTER INSERT ON users
            FOR EACH ROW
            EXECUTE FUNCTION insert_users_categories();
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TRIGGER IF EXISTS after_users_insert ON users');
        DB::statement('DROP FUNCTION IF EXISTS insert_users_categories()');
    }
};
