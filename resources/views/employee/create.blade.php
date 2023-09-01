@extends('layout.app')
@section('pageTitle','Add Employee')
@section('pageSubTitle','New Employee')
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('/assets/extensions/filepond/filepond.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/pages/filepond.css') }}">
<style>
    /* Overriding styles */
    ::-webkit-input-placeholder {
        font-size: 13px !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        font-size: 13px !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        font-size: 13px !important;
    }
</style>
@endpush
@section('content')
<!-- Bordered table start -->
<div class="col-12 p-3">
    <div class="border">
        <div class="p-3">
            <form class="form" method="post" action="{{route('employee.store', ['role' =>currentUser()])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5 class="text-center m-0">এলিট সিকিউরিটি সার্ভিস লিমিটেড</h5>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-header p-1">
                                <h5 class="card-title">Photo</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <!-- Basic file uploader -->
                                    <input type="file" class="basic-filepond" name="profile_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h6 class="text-center my-3">জীবন বৃন্তান্ত/ব্যাক্তিগত বিবরণ/তথ্যাদি</h6>
                    <h6 class="border-bottom my-2">বাংলা</h6>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">আবেদনকারীর নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_applicants_name')}}" class="form-control" placeholder="" name="bn_applicants_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">পিতার নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">মাতার নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_mothers_name')}}" class="form-control" placeholder="" name="bn_mothers_name">
                        </div>
                    </div>
                    {{--  <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">স্বামীর নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_husband_name')}}" class="form-control" placeholder="" name="bn_husband_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">স্ত্রীর নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_spouse_name')}}" class="form-control" placeholder="" name="bn_spouse_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ছেলের নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_son_name')}}" class="form-control" placeholder="" name="bn_son_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">মেয়ের নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_daughter_name')}}" class="form-control" placeholder="" name="bn_daughter_name">
                        </div>
                    </div>  --}}
                </div>
                <div class="row mt-2">
                    <h6 class="">স্থায়ী ঠিকানা </h6>
                </div>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জেলা</label>
                            <select name="bn_pre_district_id" class="form-control js-example-basic-single" id="bn_pre_district_id">
                                <option value="">Select Discrict</option>
                                <option value="1">Chittagong</option>
                                <option value="2">Dhaka</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">উপজেলা</label>
                            <select name="bn_pre_upazila_id" class="form-control js-example-basic-single" id="bn_pre_upazila_id">
                                <option value="">Select Upazila</option>
                                <option value="1">Fatikchori</option>
                                <option value="2">Boalkhali</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ইউনিয়ন</label>
                            <select name="bn_pre_union_id" class="form-control js-example-basic-single" id="bn_pre_union_id">
                                <option value="">Select Union</option>
                                <option value="1">Banskhali</option>
                                <option value="2">Boalkhali</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ওয়ার্ড নং</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_pre_word_no')}}" class="form-control" placeholder="ওয়ার্ড নং" name="bn_pre_word_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">হোল্ডিং নং</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_pre_holding_no')}}" class="form-control" placeholder="হোল্ডিং নং" name="bn_pre_holding_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">গ্রামের নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_pre_village_name')}}" class="form-control" placeholder="গ্রামের নাম" name="bn_pre_village_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">পোঃ</label>
                            <select name="bn_pre_post_ofc_id" class="form-control js-example-basic-single" id="bn_pre_post_ofc_id">
                                <option value="">Select Post Office</option>
                                <option value="1">Panchlaish</option>
                                <option value="2">Halishahar</option>
                            </select>
                        </div>
                    </div>
                    {{--  <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">থানা</label>
                            <select name="bn_pre_thana_id" class="form-control js-example-basic-single" id="bn_pre_thana_id">
                                <option value="">Select Thana</option>
                                <option value="1">Panchlaish</option>
                                <option value="2">Halishahar</option>
                            </select>
                        </div>
                    </div>  --}}
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">মোবাইল নং নিজ</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_pre_village_name')}}" class="form-control" placeholder="মোবাইল নং নিজ" name="bn_pre_village_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">মোবাইল নং বিকল্প</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_pre_village_name')}}" class="form-control" placeholder="মোবাইল নং বিকল্প" name="bn_pre_village_name">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <h6 class="">বর্তমান ঠিকানা </h6>
                </div>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">হোল্ডিং নং</label>
                            <input type="text" id="bn_prem_holding_no" value="{{old('bn_prem_holding_no')}}" class="form-control" placeholder="হোল্ডিং নং" name="bn_prem_holding_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ওয়ার্ড নং</label>
                            <input type="text" id="bn_prem_road_no" value="{{old('bn_prem_road_no')}}" class="form-control" placeholder="রোড নং" name="bn_prem_road_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">গ্রামের নাম</label>
                            <input type="text" id="bn_prem_village_name" value="{{old('bn_prem_village_name')}}" class="form-control" placeholder="গ্রামের নাম" name="bn_prem_village_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ইউনিয়ন</label>
                            <select name="bn_pre_union_id" class="form-control js-example-basic-single" id="bn_pre_union_id">
                                <option value="">Select Union</option>
                                <option value="1">Banskhali</option>
                                <option value="2">Boalkhali</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">পোঃ</label>
                            <select name="bn_pre_post_ofc_id" class="form-control js-example-basic-single" id="bn_pre_post_ofc_id">
                                <option value="">Select Post Office</option>
                                <option value="1">Panchlaish</option>
                                <option value="2">Halishahar</option>
                            </select>
                        </div>
                    </div>
                    {{--  <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">থানা</label>
                            <select name="bn_prem_thana_id" class="form-control js-example-basic-single" id="bn_prem_thana_id">
                                <option value="">Select Thana</option>
                                <option value="1">Panchlaish</option>
                                <option value="2">Halishahar</option>
                            </select>
                        </div>
                    </div>  --}}
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">উপজেলা</label>
                            <select name="bn_pre_upazila_id" class="form-control js-example-basic-single" id="bn_pre_upazila_id">
                                <option value="">Select Upazila</option>
                                <option value="1">Fatikchori</option>
                                <option value="2">Boalkhali</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জেলা</label>
                            <select name="en_prem_district_id" class="form-control js-example-basic-single" id="en_prem_district_id">
                                <option value="">Select Discrict</option>
                                <option value="1">Chittagong</option>
                                <option value="2">Dhaka</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{--  <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">সুপারিশ/রেফারেন্স নাম</label>
                            <input type="text" id="bn_ref_name" value="{{old('bn_ref_name')}}" class="form-control" placeholder="" name="bn_ref_name">

                            <label for="bn_applicants_name">সুপারিশ/রেফারেন্স ঠিকানা</label>
                            <input type="text" id="bn_ref_address" value="{{old('bn_ref_address')}}" class="form-control" placeholder="" name="bn_ref_address">
                            <div class="row gx-1">
                                <div class="col-md-6 col-12">
                                    <label for="bn_applicants_name">জাতীয়তা</label>
                                    <input type="text" id="bn_nationality" value="{{old('bn_nationality')}}" class="form-control" placeholder="" name="bn_nationality">
                                </div>
                                <div class="col-md-6 col-12">

                                </div>
                            </div>
                        </div>
                    </div>  --}}
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">সনাক্তহকরণ চিহ্ন</label>
                            <input type="text" id="bn_identification_mark" value="{{old('bn_identification_mark')}}" class="form-control" placeholder="" name="bn_identification_mark">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">শিক্ষাগতা যোগ্যতা</label>
                            <input type="text" id="bn_edu_qualification" value="{{old('bn_edu_qualification')}}" class="form-control" placeholder="" name="bn_edu_qualification">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">রক্তের গ্রুপ</label>
                            <select name="blood_id" class="form-control js-example-basic-single" id="blood_id">
                                <option value="">Select</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
                                <option value="4">B-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জন্ম তারিখ</label>
                            <input type="date" id="bn_dob" value="{{old('bn_dob')}}" class="form-control" placeholder="" name="bn_dob">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">বয়স</label>
                            <input readonly type="text" id="bn_age" value="{{old('bn_age')}}" class="form-control" placeholder="" name="bn_age">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জন্ম নিবন্ধন নং</label>
                            <input type="text" id="bn_birth_certificate" value="{{old('bn_birth_certificate')}}" class="form-control" placeholder="" name="bn_birth_certificate">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জাতীয় পরিচয়পত্র নং</label>
                            <input type="text" id="bn_nid_no" value="{{old('bn_nid_no')}}" class="form-control" placeholder="" name="bn_nid_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">জাতীয়তা</label>
                            <input type="text" id="bn_nid_no" value="{{old('bn_nid_no','বাংলাদেশী')}}" class="form-control" placeholder="" name="bn_nid_no">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_religion">ধর্ম</label>
                            <select name="bn_religion" class="form-control js-example-basic-single" id="bn_religion">
                                <option value="">Select</option>
                                <option value="1">Muslim</option>
                                <option value="2">Hindu</option>
                                <option value="3">Buddhist</option>
                                <option value="4">Christian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group mt-3">
                            <label for="bn_experience">উচ্চতা</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="bn_applied_post">ফুট</label>
                            <input type="text" id="bn_applied_post" value="{{old('bn_applied_post')}}" class="form-control" placeholder="" name="bn_applied_post">
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="bn_applied_post">ইঞ্চি</label>
                            <input type="text" id="bn_applied_post" value="{{old('bn_applied_post')}}" class="form-control" placeholder="" name="bn_applied_post">
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-group mt-3">
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group mt-3">
                            <label for="bn_experience">ওজন</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="bn_applied_post">কেজি</label>
                            <input type="text" id="bn_applied_post" value="{{old('bn_applied_post')}}" class="form-control" placeholder="" name="bn_applied_post">
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="bn_applied_post">পাউন্ড</label>
                            <input type="text" id="bn_applied_post" value="{{old('bn_applied_post')}}" class="form-control" placeholder="" name="bn_applied_post">
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="bn_applied_post">অভিজ্ঞতা</label>
                            <input type="text" id="bn_experience" value="{{old('bn_experience')}}" class="form-control" placeholder="" name="bn_experience">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_marital_status">বৈবাহিক অবস্থা</label>
                            <select name="bn_marital_status" class="form-control js-example-basic-single" onclick="getMarriedInfo()" id="bn_religion">
                                <option value="1">অবিবাহিত</option>
                                <option value="2">বিবাহিত</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 d-none bn_spouse_name1" id="bn_spouse_name1">
                        <div class="form-group">
                            <label for="bn_spouse_name">স্বামী/স্ত্রীর নাম</label>
                            <input type="text" id="bn_spouse_name" value="{{old('bn_spouse_name')}}" class="form-control" placeholder="" name="bn_spouse_name">
                        </div>
                    </div>
                    {{--  <div class="row my-2 gx-1">
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="bn_applied_post">আবেদিত পদ</label>
                                <input type="text" id="bn_applied_post" value="{{old('bn_applied_post')}}" class="form-control" placeholder="" name="bn_applied_post">
                            </div>
                        </div>
                    </div>  --}}
                </div>
                <div class="row Repeter d-none children_data" id="children_data">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ছেলের নাম</label>
                            <input type="text" id="bn_song_name" value="{{old('bn_song_name')}}" class="form-control" placeholder="ছেলের নাম" name="bn_song_name[]">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="daughters_name">মেয়ের নাম</label>
                            <input type="text" id="daughters_name" value="{{old('daughters_name')}}" class="form-control" placeholder="মেয়ের নাম" name="daughters_name[]">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ps-0">
                        <div class="form-group text-primary mt-3" style="font-size:1.3rem">
                            {{--  <span onClick='SongsRepeter(this);' class="delete-row text-danger"><i class="bi bi-trash-fill"></i></span>  --}}
                             <span onClick='newSongsRepeter(this);'><i class="bi bi-plus-square-fill"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">উত্তরাধীকারী এর নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_applicants_name')}}" class="form-control" placeholder="" name="bn_applicants_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">সম্পর্ক</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ভর্তিকারীর সুপারিশ/রেফারেন্স নাম</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">মোবাইল</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">ঠিকানা</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="bn_applicants_name">আবেদিত পদ</label>
                            <input type="text" id="bn_applicants_name" value="{{old('bn_fathers_name')}}" class="form-control" placeholder="" name="bn_fathers_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h6 class="border-bottom my-5">English</h6>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_applicants_name">Applicant Name</label>
                            <input type="text" id="en_applicants_name" value="{{old('en_applicants_name')}}" class="form-control" placeholder="" name="en_applicants_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_fathers_name">Father's Name</label>
                            <input type="text" id="en_fathers_name" value="{{old('en_fathers_name')}}" class="form-control" placeholder="" name="en_fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_mothers_name">Mother's Name</label>
                            <input type="text" id="en_mothers_name" value="{{old('en_mothers_name')}}" class="form-control" placeholder="" name="en_mothers_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_husband_name">Husband Name</label>
                            <input type="text" id="en_husband_name" value="{{old('en_husband_name')}}" class="form-control" placeholder="" name="en_husband_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_spouse_name">bn_spouse_name</label>
                            <input type="text" id="en_spouse_name" value="{{old('en_spouse_name')}}" class="form-control" placeholder="" name="en_spouse_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_son_name">Son Name</label>
                            <input type="text" id="en_son_name" value="{{old('en_son_name')}}" class="form-control" placeholder="" name="en_son_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_daughter_name">Daughter Name</label>
                            <input type="text" id="en_daughter_name" value="{{old('en_daughter_name')}}" class="form-control" placeholder="" name="en_daughter_name">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_applicant_contact">Mobile No</label>
                            <input type="text" id="en_applicant_contact" value="{{old('en_applicant_contact')}}" class="form-control" placeholder="" name="en_applicant_contact">
                        </div>
                    </div>
                </div>
                <div class="row mt-3 gx-1">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="">Permanent Address</label>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_pre_holding_no" value="{{old('en_pre_holding_no')}}" class="form-control" placeholder="Holding No" name="en_pre_holding_no">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_pre_word_no" value="{{old('en_pre_word_no')}}" class="form-control" placeholder="Ward No" name="en_pre_word_no">
                                </div>
                            </div>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <select name="en_pre_post_ofc_id" class="form-control js-example-basic-single" id="en_pre_post_ofc_id">
                                        <option value="">Select Post Office</option>
                                        <option value="1">Panchlaish</option>
                                        <option value="2">Halishahar</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="en_pre_thana_id" class="form-control js-example-basic-single" id="en_pre_thana_id">
                                        <option value="">Select Thana</option>
                                        <option value="1">Panchlaish</option>
                                        <option value="2">Halishahar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_pre_village_name" value="{{old('en_pre_village_name')}}" class="form-control" placeholder="Village Name" name="en_pre_village_name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="en_pre_union_id" class="form-control js-example-basic-single" id="en_pre_union_id">
                                        <option value="">Select Union</option>
                                        <option value="1">Banskhali</option>
                                        <option value="2">Boalkhali</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <select name="en_pre_upazila_id" class="form-control js-example-basic-single" id="en_pre_upazila_id">
                                        <option value="">Select Upazila</option>
                                        <option value="1">Fatikchori</option>
                                        <option value="2">Boalkhali</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="en_pre_district_id" class="form-control js-example-basic-single" id="en_pre_district_id">
                                        <option value="">Select Discrict</option>
                                        <option value="1">Chittagong</option>
                                        <option value="2">Dhaka</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="">Present Address</label>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_prem_holding_no" value="{{old('en_prem_holding_no')}}" class="form-control" placeholder="Holding No" name="en_prem_holding_no">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_prem_road_no" value="{{old('en_prem_road_no')}}" class="form-control" placeholder="Road No" name="en_prem_road_no">
                                </div>
                            </div>
                            <div class="row gx-1 my-2">
                                <div class="col-md-6 col-12">
                                    <input type="text" id="en_prem_building_name" value="{{old('en_prem_building_name')}}" class="form-control" placeholder="Building Name" name="en_prem_building_name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="en_prem_district_id" class="form-control js-example-basic-single" id="en_prem_district_id">
                                        <option value="">Select Discrict</option>
                                        <option value="1">Chittagong</option>
                                        <option value="2">Dhaka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-1 my-2">
                                <div class="col-md-12 col-12">
                                    <select name="en_prem_thana_id" class="form-control js-example-basic-single" id="en_prem_thana_id">
                                        <option value="">Select Thana</option>
                                        <option value="1">Panchlaish</option>
                                        <option value="2">Halishahar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="en_reference_name">Reference Name</label>
                            <input type="text" id="en_reference_name" value="{{old('en_reference_name')}}" class="form-control" placeholder="" name="en_reference_name">

                            <label for="en_ref_address">Reference Address</label>
                            <input type="text" id="en_ref_address" value="{{old('en_ref_address')}}" class="form-control" placeholder="" name="en_ref_address">

                            <label for="en_ref_mobile">Reference Mobile</label>
                            <input type="text" id="en_ref_mobile" value="{{old('en_ref_mobile')}}" class="form-control" placeholder="" name="en_ref_mobile">
                            <div class="row gx-1">
                                <div class="col-md-6 col-12">
                                    <label for="en_religion">Religion</label>
                                    <select name="en_religion" class="form-control js-example-basic-single" id="en_religion">
                                        <option value="">Select</option>
                                        <option value="1">Muslim</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Buddhist</option>
                                        <option value="4">Christian</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="en_ident_mark">Identification Mark</label>
                                        <input type="text" id="en_ident_mark" value="{{old('en_ident_mark')}}" class="form-control" placeholder="" name="en_ident_mark">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="en_height">Height</label>
                                    <input type="text" id="en_height" value="{{old('en_height')}}" class="form-control" placeholder="" name="en_height">
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="en_weight">Weight</label>
                                    <input type="text" id="en_weight" value="{{old('en_weight')}}" class="form-control" placeholder="" name="en_weight">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gx-1">
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_edu_qualification">Education Qualification</label>
                                <input type="text" id="en_edu_qualification" value="{{old('en_edu_qualification')}}" class="form-control" placeholder="" name="en_edu_qualification">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_experience">Experience</label>
                                <input type="text" id="en_experience" value="{{old('en_experience')}}" class="form-control" placeholder="" name="en_experience">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" id="dob" value="{{old('dob')}}" class="form-control" placeholder="" name="dob">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_birth_cert">Birth Certificate</label>
                                <input type="text" id="en_birth_cert" value="{{old('en_birth_cert')}}" class="form-control" placeholder="" name="en_birth_cert">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_nationality">Nationality</label>
                                <input type="text" id="en_nationality" value="{{old('en_nationality')}}" class="form-control" placeholder="" name="en_nationality">

                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_nid">Nid</label>
                                <input type="text" id="en_nid" value="{{old('en_nid')}}" class="form-control" placeholder="" name="en_nid">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="marital_status">Maritial Status</label>
                                <select id="marital_status" class="form-control" name="marital_status">
                                    <option value="">Select</option>
                                    <option value="1">Married</option>
                                    <option value="2">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="en_applied_position">Position Applied For</label>
                                <input type="text" id="en_applied_position" value="{{old('en_applied_position')}}" class="form-control" placeholder="" name="en_applied_position">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 mt-3">
                        <div class="form-group">
                            <label for="en_next_of_kin">Next Of Kin</label>
                            <input type="text" id="en_next_of_kin" value="{{old('en_next_of_kin')}}" class="form-control" placeholder="" name="en_next_of_kin">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 mt-3">
                        <div class="form-group">
                            <label for="en_relation_with_applicant">Relationship With Applicant</label>
                            <input type="text" id="en_relation_with_applicant" value="{{old('en_relation_with_applicant')}}" class="form-control" placeholder="" name="en_relation_with_applicant">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-header p-1">
                                <h5 class="card-title">Upload Your Signture</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <!-- Basic file uploader -->
                                    <input type="file" class="basic-filepond" name="signature_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function newSongsRepeter() {
        var Repeter = `
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <label for="bn_applicants_name">ছেলের নাম</label>
                    <input type="text" id="bn_song_name" value="{{old('bn_song_name')}}" class="form-control" placeholder="ছেলের নাম" name="bn_song_name[]">
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <label for="daughters_name">মেয়ের নাম</label>
                    <input type="text" id="daughters_name" value="{{old('daughters_name')}}" class="form-control" placeholder="মেয়ের নাম" name="daughters_name[]">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 ps-0">
                <div class="form-group text-primary mt-3" style="font-size:1.3rem">
                    <span onClick='removeElement(this);' class="delete-row text-danger"><i class="bi bi-trash-fill"></i></span>
                </div>
            </div>
        </div>
        `;

        $('.Repeter').append(Repeter);
    }
    function removeElement(e){
        if (confirm("Are you sure you want to remove this row?")) {
            $(e).closest('.row').remove();
        }
    }
</script>
<script>
    {{--  $(document).ready(function() {
        $('#amountHideButton').click(function(){
            if ($(this).hasClass('btn-selected')){
                $('.td_hide').addClass('d-none');
                $(this).removeClass('btn-danger').addClass('btn-success').removeClass('btn-selected').text('Show Amount');
            }else{
                $('.td_hide').removeClass('d-none');
                $(this).addClass('btn-danger').removeClass('btn-success').addClass('btn-selected').text('Hide Amount');
            }
        });
    });  --}}
    function getMarriedInfo() {
        var selectedOption = document.querySelector('select[name="bn_marital_status"]').value;

        if (selectedOption === "2") {
            $('.bn_spouse_name1').removeClass('d-none');
            $('.children_data').removeClass('d-none');
        }else {
            $('.bn_spouse_name1').addClass('d-none');
            $('.children_data').addClass('d-none');
        }
    }
    </script>
@endsection
@push('scripts')

<script src="{{ asset('/assets/extensions/filepond/filepond.js') }}"></script>
<script src="{{ asset('/assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ asset('/assets/js/pages/filepond.js') }}"></script>
@endpush
