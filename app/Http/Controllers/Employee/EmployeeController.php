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

            $employee->bn_parm_district_id = $request->bn_parm_district_id;
            $employee->bn_parm_upazila_id = $request->bn_parm_upazila_id;
            $employee->bn_parm_union_id = $request->bn_parm_union_id;
            $employee->bn_parm_ward_id = $request->bn_parm_ward_id;
            $employee->bn_parm_holding_name = $request->bn_parm_holding_name;
            $employee->bn_parm_village_name = $request->bn_parm_village_name;
            $employee->bn_parm_post_ofc = $request->bn_parm_post_ofc;
            $employee->bn_parm_phone_my = $request->bn_parm_phone_my;
            $employee->bn_parm_phone_alt = $request->bn_parm_phone_alt;

            $employee->bn_pre_district_id = $request->bn_pre_district_id;
            $employee->bn_pre_upazila_id = $request->bn_pre_upazila_id;
            $employee->bn_pre_union_id = $request->bn_pre_union_id;
            $employee->bn_pre_ward_no = $request->bn_pre_ward_no;
            $employee->bn_pre_holding_no = $request->bn_pre_holding_no;
            $employee->bn_pre_village_name = $request->bn_pre_village_name;
            $employee->bn_pre_post_ofc = $request->bn_pre_post_ofc;
            $employee->bn_identification_mark = $request->bn_identification_mark;
            $employee->bn_edu_qualification = $request->bn_edu_qualification;
            $employee->bn_blood_id = $request->bn_blood_id;
            $employee->bn_dob = $request->bn_dob;
            $employee->bn_age = $request->bn_age;
            $employee->bn_birth_certificate = $request->bn_birth_certificate;
            $employee->bn_nid_no = $request->bn_nid_no;
            $employee->bn_nationality = $request->bn_nationality;
            $employee->bn_religion = $request->bn_religion;
            $employee->bn_height_foot = $request->bn_height_foot;
            $employee->bn_height_inc = $request->bn_height_inc;
            $employee->bn_weight_kg = $request->bn_weight_kg;
            $employee->bn_weight_pounds = $request->bn_weight_pounds;
            $employee->bn_experience = $request->bn_experience;
            $employee->bn_marital_status = $request->bn_marital_status;
            $employee->bn_spouse_name = $request->bn_spouse_name;
            $employee->bn_legacy_name = $request->bn_legacy_name;
            $employee->bn_legacy_relation = $request->bn_legacy_relation;
            $employee->bn_reference_admittee = $request->bn_reference_admittee;
            $employee->bn_reference_adm_phone = $request->bn_reference_adm_phone;
            $employee->bn_reference_adm_adress = $request->bn_reference_adm_adress;
            $employee->bn_applied_position = $request->bn_applied_position;

//   English
            $employee->en_applicants_name = $request->en_applicants_name;
            $employee->en_fathers_name = $request->en_fathers_name;
            $employee->en_mothers_name = $request->en_mothers_name;
            $employee->en_parm_district_id = $request->en_parm_district_id;
            $employee->en_parm_upazila_id = $request->en_parm_upazila_id;
            $employee->en_parm_union_id = $request->en_parm_union_id;
            $employee->en_parm_ward_id = $request->en_parm_ward_id;
            $employee->en_parm_holding_name = $request->en_parm_holding_name;
            $employee->en_parm_village_name = $request->en_parm_village_name;
            $employee->en_parm_post_ofc = $request->en_parm_post_ofc;
            $employee->en_parm_phone_my = $request->en_parm_phone_my;
            $employee->en_parm_phone_alt = $request->en_parm_phone_alt;

            $employee->en_pre_district_id = $request->en_pre_district_id;
            $employee->en_pre_upazila_id = $request->en_pre_upazila_id;
            $employee->en_pre_union_id = $request->en_pre_union_id;
            $employee->en_pre_ward_id = $request->en_pre_ward_id;
            $employee->en_pre_holding_no = $request->en_pre_holding_no;
            $employee->en_pre_village_name = $request->en_pre_village_name;
            $employee->en_pre_post_ofc = $request->en_pre_post_ofc;
            $employee->en_identification_mark = $request->en_identification_mark;
            $employee->en_edu_qualification = $request->en_edu_qualification;
            $employee->en_blood_id = $request->en_blood_id;
            $employee->en_dob = $request->en_dob;
            $employee->en_age = $request->en_age;
            $employee->en_birth_certificate = $request->en_birth_certificate;
            $employee->en_nid_no = $request->en_nid_no;
            $employee->en_nationality = $request->en_nationality;
            $employee->en_religion = $request->en_religion;
            $employee->en_height_foot = $request->en_height_foot;
            $employee->en_height_inc = $request->en_height_inc;
            $employee->en_weight_kg = $request->en_weight_kg;
            $employee->en_weight_pounds = $request->en_weight_pounds;
            $employee->en_experience = $request->en_experience;
            $employee->en_marital_status = $request->en_marital_status;
            $employee->en_spouse_name = $request->en_spouse_name;
            $employee->en_legacy_name = $request->en_legacy_name;
            $employee->en_legacy_relation = $request->en_legacy_relation;
            $employee->en_reference_admittee = $request->en_reference_admittee;
            $employee->en_reference_adm_phone = $request->en_reference_adm_phone;
            $employee->en_reference_adm_adress = $request->en_reference_adm_adress;
            $employee->en_applied_position = $request->en_applied_position;
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
