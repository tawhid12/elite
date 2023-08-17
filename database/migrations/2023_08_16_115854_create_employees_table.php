<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('profile_img')->nullable();

            $table->string('bn_applicants_name')->nullable();
            $table->string('bn_fathers_name')->nullable();
            $table->string('bn_mothers_name')->nullable();
            $table->string('bn_husband_name')->nullable();
            $table->string('bn_spouse_name')->nullable();
            $table->string('bn_son_name')->nullable();
            $table->string('bn_daughter_name')->nullable();

            $table->string('bn_pre_holding_no')->nullable();
            $table->string('bn_pre_word_no')->nullable();
            $table->integer('bn_pre_post_ofc_id')->nullable();
            $table->integer('bn_pre_thana_id')->nullable();
            $table->string('bn_pre_village_name')->nullable();
            $table->integer('bn_pre_union_id')->nullable();
            $table->integer('bn_pre_upazila_id')->nullable();
            $table->integer('bn_pre_district_id')->nullable();

            $table->string('bn_prem_holding_no')->nullable();
            $table->string('bn_prem_road_no')->nullable();
            $table->integer('bn_prem_village_name')->nullable();
            $table->integer('bn_prem_district_id')->nullable();
            $table->integer('bn_prem_thana_id')->nullable();

            $table->integer('bn_ref_name')->nullable();
            $table->integer('bn_ref_address')->nullable();
            $table->string('bn_nationality')->nullable();
            $table->integer('bn_religion')->comment('1 => For Muslim, 2=> Hindhu, 3=> Buddhist, 4 => Christian')->nullable();
            $table->string('bn_identification_mark')->nullable();
            $table->string('bn_edu_qualification')->nullable();
            $table->integer('bn_experience')->nullable();
            $table->string('bn_applied_post')->nullable();

            /*End Of Bangla Form */

            /*Old Job Data*/
            /*শশুর বাড়ির ঠিকানা (বিবাহিত মহিলাদের জন্য) */
            $table->string('bn_in_laws_village_name')->nullable();
            $table->integer('bn_in_laws_post_office_id')->nullable();
            $table->integer('bn_in_laws_thana_id')->nullable();
            $table->integer('bn_in_laws_district_id')->nullable();

            $table->string('bn_husband_profession')->nullable();
            $table->string('bn_father_profession')->nullable();
            $table->string('bn_old_job_designation')->nullable();
            $table->string('bn_old_job_id')->nullable();
            $table->string('bn_landlord_name')->comment('জমিদারের নাম')->nullable();
            $table->string('bn_landlord_mobile_no')->comment('জমিদারের মোবাইল নম্বর')->nullable();
            $table->string('bn_living_dur')->comment('বর্তমান ঠিকানায় যাবৎ কতদিন বাস করছেন')->nullable();
            $table->string('bn_passport_no')->nullable();
            $table->string('bn_old_office_name')->comment('পূর্বের কর্মস্থলের নাম কি')->nullable();
            $table->string('bn_old_office_address')->comment('পূর্বের কর্মস্থলের ঠিকানা')->nullable();
            $table->string('bn_resign_reason')->comment('পূর্বের কর্মস্থলের থেকে কাজ ছাড়ার কারণ কি')->nullable();
            $table->tinyInteger('bn_resign_letter_status')->comment('পূর্বের কর্মস্থলে অবহতিপত্র দিয়েছিলেন কি')->nullable();
            $table->tinyInteger('bn_service_book_status')->comment('সার্ভিস বই আছে কি ?')->nullable();
            $table->decimal('bn_old_job_salary')->comment('পূর্বের কর্মস্থলের কত টাকা বেতন ছিল')->nullable();
            $table->integer('bn_old_job_experience')->comment('পূর্বের কর্মস্থলের মোট চাকুরীর বয়স কত')->nullable();
            $table->tinyInteger('bn_current_living')->comment('বর্তমান ঠিকানায় কার কার সাথে বসবাস করছেন')->nullable();
            $table->tinyInteger('bn_total_member')->comment('পরিবার এর সদস্য সংখ্যা কত')->nullable();
            $table->tinyInteger('bn_solvent_person')->comment('পরিবার এ উপার্জনকারী কত জন')->nullable();
            $table->tinyInteger('bn_sim_card_reg_status')->comment('সিম কার্ড রেজিস্ট্রেশন করা আছে কি')->nullable();
            $table->tinyInteger('bn_case_filed_status')->comment('আপনার দায়ের করা বা আপনার বিরুদ্ধে থানায় কিংবা আদালতে (স্থানীয় বা বর্তমান) কোনো মামলা আছে কি')->nullable();
            $table->integer('bn_old_job_officer_name')->comment('পূর্বের কর্মস্থলের কর্মকর্তার নাম')->nullable();
            $table->integer('bn_old_job_officer_mobile')->nullable();
            $table->integer('bn_old_job_officer_post')->nullable();



            $table->string('en_applicants_name')->nullable();
            //$table->string('id_no')->nullable();
            $table->string('en_fathers_name')->nullable();
            $table->string('en_mothers_name')->nullable();
            $table->string('en_husband_name')->nullable();
            $table->string('en_spouse_name')->nullable();
            $table->string('en_son_name')->nullable();
            $table->string('en_daughter_name')->nullable();
            $table->string('en_applicant_contact')->unique()->nullable();

            $table->string('en_pre_holding_no')->nullable();
            $table->string('en_pre_word_no')->nullable();
            $table->integer('en_pre_post_ofc_id')->nullable();
            $table->integer('en_pre_thana_id')->nullable();
            $table->string('en_pre_village_name')->nullable();
            $table->integer('en_pre_union_id')->nullable();
            $table->integer('en_pre_upazila_id')->nullable();
            $table->integer('en_pre_district_id')->nullable();

            $table->string('en_prem_holding_no')->nullable();
            $table->string('en_prem_road_no')->nullable();
            $table->string('en_prem_building_name')->nullable();
            $table->integer('en_prem_district_id')->nullable();
            $table->integer('en_prem_thana_id')->nullable();
           
            $table->string('en_reference_name')->nullable();
            $table->text('en_ref_address')->nullable();
            $table->text('en_ref_mobile')->nullable();
            $table->string('en_religion')->nullable();
            $table->string('en_ident_mark')->nullable();
            $table->string('en_height')->comment("Foot and Inch")->nullable();
            $table->string('en_weight')->comment("Weight")->nullable();

            $table->string('en_edu_qualification')->nullable();
            $table->string('en_experience')->nullable();
            $table->date('dob')->nullable();
            $table->string('en_birth_cert')->nullable();
            $table->string('en_nationality')->nullable();
            $table->string('en_nid')->nullable();
            $table->boolean('marital_status')->default(2)->comment('1=>married 2=>unmarried')->nullable();
            $table->string('en_applied_position')->nullable();

            $table->string('en_next_of_kin')->nullable();
            $table->string('en_relation_with_applicant')->nullable();
            $table->string('signature_img')->nullable();

            $table->boolean('status')->default(1)->comment('1=>active 2=>inactive');
            $table->unsignedBigInteger('created_by')->index()->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('updated_by')->nullable()->index()->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
