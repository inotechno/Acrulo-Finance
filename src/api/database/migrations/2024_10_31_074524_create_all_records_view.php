<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Buat view all_records
        DB::statement('
            CREATE OR REPLACE VIEW all_records AS
            SELECT
                r.id,
                r.datetime,
                r.transaction_type,
                r.amount,
                r.note,
                r.payee,
                r.account_id,
                NULL AS from_account_id,
                NULL AS to_account_id
            FROM
                records r
            WHERE
                r.transaction_type IN (\'income\', \'expense\')

            UNION ALL

            SELECT
                t.id,
                NOW() AS datetime,  -- Anda bisa menyesuaikan ini jika ada kolom tanggal transfer
                \'transfer\' AS transaction_type,
                r.amount,
                r.note,
                NULL AS payee,
                t.from_account_id AS account_id,
                t.from_account_id AS from_account_id,
                t.to_account_id AS to_account_id
            FROM
                transfers t
            JOIN
                records r ON r.transfer_id = t.id;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Hapus view jika rollback
        DB::statement('DROP VIEW IF EXISTS all_records');
    }
};
