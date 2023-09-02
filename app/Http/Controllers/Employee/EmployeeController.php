<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

use App\Models\Employee\Employee;
use Illuminate\Http\Request;

use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\Settings\Location\Ward;
use App\Models\Settings\BloodGroup;
use App\Models\Settings\Religion;

use Toastr;
use Carbon\Carbon;
use DB;
use File;
use App\Http\Traits\ImageHandleTraits;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(20);
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $upazila = Upazila::all();
        $union = Union::all();
        $ward = Ward::all();
        $bloods = BloodGroup::all();
        $religions = Religion::all();
        return view('employee.create',compact('districts','upazila','union','ward','bloods','religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            /*echo '<pre>';
        print_r($request->all());*/
            $employee = new Employee();
            $employee->bn_applicants_name = $request->bn_applicants_name;
            $employee->bn_fathers_name = $request->bn_fathers_name;
            $employee->bn_mothers_name = $request->bn_mothers_name;
            $employee->bn_husband_name = $request->bn_husband_name;
            $employee->bn_spouse_name = $request->bn_spouse_name;
            $employee->bn_son_name = $request->bn_son_name;
            $employee->bn_daughter_name = $request->bn_daughter_name;
            $employee->bn_pre_holding_no = $request->bn_pre_holding_no;
            $employee->bn_pre_word_no = $request->bn_pre_word_no;
            $employee->bn_pre_post_ofc_id = $request->bn_pre_post_ofc_id;
            $employee->bn_pre_thana_id = $request->bn_pre_thana_id;
            $employee->bn_pre_village_name = $request->bn_pre_village_name;
            $employee->bn_pre_union_id = $request->bn_pre_union_id;
            $employee->bn_pre_upazila_id = $request->bn_pre_upazila_id;
            $employee->bn_pre_district_id = $request->bn_pre_district_id;
            $employee->bn_prem_holding_no = $request->bn_prem_holding_no;
            $employee->bn_prem_road_no = $request->bn_prem_road_no;
            $employee->bn_prem_village_name = $request->bn_prem_village_name;
            $employee->en_prem_district_id = $request->en_prem_district_id;
            $employee->bn_prem_thana_id = $request->bn_prem_thana_id;
            $employee->bn_ref_name = $request->bn_ref_name;
            $employee->bn_ref_address = $request->bn_ref_address;
            $employee->bn_nationality = $request->bn_nationality;
            $employee->bn_religion = $request->bn_religion;
            $employee->bn_identification_mark = $request->bn_identification_mark;
            $employee->bn_edu_qualification = $request->bn_edu_qualification;
            $employee->bn_experience = $request->bn_experience;
            $employee->bn_applied_post = $request->bn_applied_post;
            $employee->bn_in_laws_village_name = $request->bn_in_laws_village_name;
            $employee->bn_in_laws_post_office_id = $request->bn_in_laws_post_office_id;
            $employee->bn_in_laws_thana_id = $request->bn_in_laws_thana_id;
            $employee->bn_in_laws_district_id = $request->bn_in_laws_district_id;
            $employee->bn_husband_profession = $request->bn_husband_profession;
            $employee->bn_father_profession = $request->bn_father_profession;
            $employee->bn_old_job_designation = $request->bn_old_job_designation;
            $employee->bn_old_job_id = $request->bn_old_job_id;
            $employee->bn_landlord_name = $request->bn_landlord_name;
            $employee->bn_landlord_mobile_no = $request->bn_landlord_mobile_no;
            $employee->bn_living_dur = $request->bn_living_dur;
            $employee->bn_passport_no = $request->bn_passport_no;
            $employee->bn_old_office_name = $request->bn_old_office_name;
            $employee->bn_old_office_address = $request->bn_old_office_address;
            $employee->bn_resign_reason = $request->bn_resign_reason;
            $employee->bn_resign_letter_status = $request->bn_resign_letter_status;
            $employee->bn_service_book_status = $request->bn_service_book_status;
            $employee->bn_old_job_salary = $request->bn_old_job_salary;
            $employee->bn_old_job_experience = $request->bn_old_job_experience;
            $employee->bn_current_living = $request->bn_current_living;
            $employee->bn_total_member = $request->bn_total_member;
            $employee->bn_solvent_person = $request->bn_solvent_person;
            $employee->bn_sim_card_reg_status = $request->bn_sim_card_reg_status;
            $employee->bn_case_filed_status = $request->bn_case_filed_status;
            $employee->bn_old_job_officer_name = $request->bn_old_job_officer_name;
            $employee->bn_old_job_officer_mobile = $request->bn_old_job_officer_mobile;
            $employee->bn_old_job_officer_post = $request->bn_old_job_officer_post;

            $employee->en_applicants_name = $request->en_applicants_name;
            $employee->en_fathers_name = $request->en_fathers_name;
            $employee->en_mothers_name = $request->en_mothers_name;
            $employee->en_husband_name = $request->en_husband_name;
            $employee->en_spouse_name = $request->en_spouse_name;
            $employee->en_son_name = $request->en_son_name;
            $employee->en_daughter_name = $request->en_daughter_name;
            $employee->en_applicant_contact = $request->en_applicant_contact;
            $employee->en_pre_holding_no = $request->en_pre_holding_no;
            $employee->en_pre_word_no = $request->en_pre_word_no;
            $employee->en_pre_post_ofc_id = $request->en_pre_post_ofc_id;
            $employee->en_pre_thana_id = $request->en_pre_thana_id;
            $employee->en_pre_village_name = $request->en_pre_village_name;
            $employee->en_pre_union_id = $request->en_pre_union_id;
            $employee->en_pre_upazila_id = $request->en_pre_upazila_id;
            $employee->en_pre_district_id = $request->en_pre_district_id;
            $employee->en_prem_holding_no = $request->en_prem_holding_no;
            $employee->en_prem_road_no = $request->en_prem_road_no;
            $employee->en_prem_building_name = $request->en_prem_building_name;
            $employee->en_prem_thana_id = $request->en_prem_thana_id;
            $employee->en_reference_name = $request->en_reference_name;
            $employee->en_ref_address = $request->en_ref_address;
            $employee->en_ref_mobile = $request->en_ref_mobile;
            $employee->en_religion = $request->en_religion;
            $employee->en_ident_mark = $request->en_ident_mark;
            $employee->en_height = $request->en_height;
            $employee->en_weight = $request->en_weight;
            $employee->en_edu_qualification = $request->en_edu_qualification;
            $employee->en_experience = $request->en_experience;
            $employee->dob = date('Y-m-d', strtotime($request->dob));
            $employee->en_birth_cert = $request->en_birth_cert;
            $employee->en_nationality = $request->en_nationality;
            $employee->en_nid = $request->en_nid;
            $employee->marital_status = $request->marital_status;
            $employee->en_applied_position = $request->en_applied_position;
            $employee->en_next_of_kin = $request->en_next_of_kin;
            $employee->en_relation_with_applicant = $request->en_relation_with_applicant;
            if ($employee->save()) {
                return redirect()->route('employee.index', ['role' =>currentUser()])->with(Toastr::success('Data Saved!', 'Success', ["positionClass" => "toast-top-right"]));
            } else {
                return redirect()->back()->withInput()->with(Toastr::error('Please try again!', 'Fail', ["positionClass" => "toast-top-right"]));
            }
        } catch (Exception $e) {
            //dd($e);
            return redirect()->back()->withInput()->with(Toastr::error('Please try again!', 'Fail', ["positionClass" => "toast-top-right"]));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($role,$id)
    {
        $emp = Employee::findOrFail(encryptor('decrypt', $id));
        return view('employee.show', compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
