<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->unique();
            $table->unsignedBigInteger('role_id')->index()->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('password');
            $table->string('image')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('designation_id')->nullable();
            $table->boolean('all_company_access')->nullable()->default(0)->comment('1=>active 2=>inactive');
            $table->boolean('status')->default(1)->comment('1=>active 2=>Logged 0 => Inactive');
            $table->string('last_login')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert([
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@email.com',
                'contact_no' => '01600000000',
                'password' => Hash::make('superadmin'),
                'designation_id' => 1,
                'department_id' => 1,
                'role_id' => 1,
                'branch_id' => 1,
                'all_company_access' => 1,
                'status' => 1,
                'created_by' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'contact_no' => '01600000001',
                'password' => Hash::make('admin'),
                'designation_id' => 1,
                'department_id' => 1,
                'role_id' => 2,
                'branch_id' => 1,
                'all_company_access' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1,
            ],
            [
                'name' => 'Hr Executive',
                'email' => 'hr@email.com',
                'contact_no' => '01600000002',
                'password' => Hash::make('hr'),
                'designation_id' => 1,
                'department_id' => 1,
                'role_id' => 3,
                'branch_id' => 1,
                'all_company_access' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1,
            ],
            [
                'name' => 'Accountant Executive',
                'email' => 'account@email.com',
                'contact_no' => '01600000003',
                'password' => Hash::make('account'),
                'designation_id' => 1,
                'department_id' => 1,
                'role_id' => 4,
                'branch_id' => 1,
                'all_company_access' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1,
            ],
            [
                'name' => 'General User',
                'email' => 'user@email.com',
                'contact_no' => '01600000004',
                'password' => Hash::make('user'),
                'designation_id' => 1,
                'department_id' => 1,
                'role_id' => 5,
                'branch_id' => 1,
                'all_company_access' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
