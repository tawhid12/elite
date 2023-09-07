@extends('layout.app')
@section('content')
<div>
    <a href="#" class="btn btn-info no-print"> Go To Dashboard</a>
    <button type="button" class="btn btn-info no-print" onclick="printDiv('result_show')">Print</button>
</div>
<section id="result_show">
    <style>
        .tinput {
            width: 100%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .semiTinput {
            width: 44%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .semiSinput {
            width: 64%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .sbinput {
            width: 36%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .sinput {
            width: 30%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .sminput {
            width: 18%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .small {
            width: 25%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .verySmall {
            width: 10%;
            outline: 0;
            border-style: dashed;
            border-width: 0 0 1px;
            border-color: blue;
            background-color: transparent;
        }
        .tbl_border{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
    <section>
        <div class="container">
            <div class="row p-3">
                <div class="col-3">
                    <img  class="mt-5" height="80px" width="140px" src="{{ asset('assets/images/logo/logo.png')}}" alt="no img">
                </div>
                <div class="col-6 col-sm-6" style="padding-left: 10px;">
                    <div style="text-align: center;">
                        <h5 style="padding-top: 5px;">এলিট সিকিউরিটি সার্ভিসেস লিমিটেড</h5>
                        <p class="text-center m-0 p-0">ভর্তি ফরম:সকল অস্থায়ী পদের জন্য</p>
                        <p class="text-center m-0 p-0">বাড়ি নং-২,লেইন নং-২,রোড নং-২,ব্লক-''কে''</p>
                        <p class="text-center m-0 p-0">হালিশহর হাউজিং এষ্টেট,চট্টগ্রাম-৪২২৪</p>
                        <h6 class="text-center m-0 p-0"><u>জীবন বৃত্তান্ত/ব্যক্তিগত বিবরন/তথ্যাদি</u></h6>
                    </div>
                </div>
                <div class="col-3" style="padding-left: 10px;">
                    <img height="150px" width="150px"  src="{{asset('uploads/profile_img/'.$employees->profile_img)}}" onerror="this.onerror=null;this.src='{{ asset('assets/images/logo/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
                </div>
            </div>
            <div class="row p-3">
                <table style="width:100%">
                    <tbody >
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">১ । আবেদনকারীর নাম :</td>
                            <td class="py-2" colspan="5" style="width: 40%;"><input type="text" class="tinput"  value="{{ $employees->bn_applicants_name }}"></td>
                            <td class="py-2" style="text-align: center; width: 20%;">ভর্তির পর আইডি নং</td>
                            <td class="py-2" colspan="2" style="width: 15%;"><input type="text" class="tinput"  value="{{ $employees->admission_id_no }}"></td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">২ । পিতার নাম:</td>
                            <td class="py-2" colspan="4" ><input type="text" class="tinput"  value="{{ $employees->bn_fathers_name }}"></td>
                            <td class="py-2" style="text-align: center;">মাতার নাম:</td>
                            <td class="py-2" colspan="3" ><input type="text" class="tinput"  value="{{ $employees->bn_mothers_name }}"></td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৩ । স্থায়ী ঠিকানা :</td>
                            <td class="py-2" colspan="8">
                                <label for="">হোল্ডিং নং:</label>
                                <input type="text" class="sinput" value="{{ $employees->bn_parm_holding_name }}">
                                <label for="">ওয়ার্ড:</label>
                                <input type="text" class="sminput" value="{{ $employees->bn_parm_ward?->name_bn }}">
                                <label for="">গ্রাম:</label>
                                <input type="text" class="sminput" value="{{ $employees->bn_parm_village_name }}">
                                <label for="">ইউনিয়ন :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_parm_union_id }}">
                                <label for="">পোঃ :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_parm_post_ofc }}">
                                <label for="">উপজেলা :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_parm_upazilla?->name_bn }}">
                                <label for="">জেলা :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_parm_district?->name_bn }}">
                                <label for="">মোবাইল নং(নিজ) :</label>
                                <input type="text" class="sinput" value="{{ $employees->bn_parm_phone_my }}">
                                <label for="">বিকল্প :</label>
                                <input type="text" class="sinput" value="{{ $employees->bn_parm_phone_alt }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৪ । বর্তমান ঠিকানা :</td>
                            <td class="py-2" colspan="8">
                                <label for="">হোল্ডিং নং:</label>
                                <input type="text" class="sinput" value="{{ $employees->bn_pre_holding_no }}">
                                <label for="">ওয়ার্ড:</label>
                                <input type="text" class="sminput" value="{{ $employees->bn_pre_ward?->name_bn }}">
                                <label for="">গ্রাম:</label>
                                <input type="text" class="sminput" value="{{ $employees->bn_pre_village_name }}">
                                <label for="">ইউনিয়ন :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_pre_union_id }}">
                                <label for="">পোঃ :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_pre_post_ofc }}">
                                <label for="">উপজেলা :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_upazilla?->name_bn }}">
                                <label for="">জেলা :</label>
                                <input type="text" class="sbinput" value="{{ $employees->bn_district?->name_bn }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" colspan="9" style="text-align: center;"><b>(উল্লেখ্য, আমার বর্তমান ঠিকানা পরিবর্তন হলে আমি তাহা সাথে সাথে অফিস কে জানাবো)</b></td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৫ । সনাক্তহকরণ চিহ্ন :</td>
                            <td class="py-2" colspan="5" style="width: 35%;"><input type="text" class="tinput"  value="{{ $employees->bn_identification_mark }}"></td>
                            <td class="py-2" style="text-align: center; width: 10%;">রক্তের গ্রুপ</td>
                            <td class="py-2" colspan="2" style="width: 35%;"><input type="text" class="tinput"  value="{{ $employees->bloodgroup?->name_bn }}"></td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৬ । শিক্ষাগতা যোগ্যতা</td>
                            <td class="py-2" colspan="8">
                                <input type="text" class="sbinput" value="{{ $employees->bn_edu_qualification }}">
                                <label for="">জন্ম তারিখ</label>
                                <input type="text" class="sminput" value="{{ $employees->bn_dob }}">
                                <label for="">বয়স</label>
                                @php
                                $birthDate = $employees->bn_dob;
                                $age = \Carbon\Carbon::parse($birthDate)->age;
                                @endphp
                                <input type="text" class="sminput" value="{{ $age }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; ">৭ । জন্ম নিবন্ধন নং :</td>
                            <td class="py-2" colspan="8">
                                <input type="text" class="sinput"  value="{{ $employees->bn_birth_certificate }}">
                                <label for="">জাতীয় পরিচয়পত্র নং</label>
                                <input type="text" class="sinput"  value="{{ $employees->bn_nid_no }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৮ । জাতীয়তা :</td>
                            <td class="py-2" colspan="8">
                                <input type="text" class="small"  value="{{ $employees->bn_nationality }}">
                                <label for="">ধর্ম</label>
                                <input type="text" class="small"  value="{{ $employees->religion?->name_bn }}">
                                <label for="">উচ্চতা</label>
                                <input type="text" class="verySmall"  value="{{ $employees->bn_height_foot }}">
                                <label for="">ফুট</label>
                                <input type="text" class="verySmall"  value="{{ $employees->bn_height_inc }}">
                                <label for="">ইঞ্চি</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">৯ । ওজন :</td>
                            <td class="py-2" colspan="8">
                                <input type="text" class="sminput"  value="{{ $employees->bn_weight_kg }}">
                                <label for="">কেজি</label>
                                <label for="">অভিজ্ঞতা</label>
                                <input type="text" class="semiTinput"  value="{{ $employees->bn_experience }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">১০ । বৈবাহিক অবস্থা :</td>
                            <td class="py-2" colspan="8">
                                <input type="text" class="sinput" @if($employees->bn_marital_status) value="{{ 'অবিবাহিত' }}" @else value="{{ 'বিবাহিত' }}" @endif>
                                <label for="">স্বামী/স্ত্রীর নাম</label>
                                <input type="text" class="semiTinput"  value="{{ $employees->bn_spouse_name }}">
                                <label for="">ছেলের নাম</label>
                                <input type="text" class="sinput"  value="{{ $employees->bn_spouse_name }}">
                                <label for="">মেয়ের নাম</label>
                                <input type="text" class="sinput"  value="{{ $employees->bn_spouse_name }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" colspan="9"  style="text-align: left;">
                                <label for="">১১ । উত্তরাধীকারী (Next of Kin) এর নাম:</label>
                                <input type="text" class="semiTinput"  value="{{ $employees->bn_legacy_name }}">
                                <label for="">সম্পর্ক</label>
                                <input type="text" class="verySmall"  value="{{ $employees->bn_legacy_relation }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" colspan="9"  style="text-align: left;">
                                <label for="">১২ । ভর্তিকারীর সুপারিশ/রেফারেন্স নাম:</label>
                                <input type="text" class="sinput"  value="{{ $employees->bn_reference_admittee }}">
                                <label for="">মোবাইল</label>
                                <input type="text" class="sminput"  value="{{ $employees->bn_reference_adm_phone }}">
                                <label for="" style="padding-left: 11rem;">ঠিকানা</label>
                                <input type="text" class="semiSinput"  value="{{ $employees->bn_reference_adm_adress }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2" style="text-align: left; width: 25%;">১৩ । আবেদিত পদ :</td>
                            <td class="py-2" colspan="8" style="width: 75%;"><input type="text" class="tinput"  value="{{ $employees->bn_applied_position }}"></td>
                        </tr>
                        <tr>
                            <th class="py-2" colspan="9"  style="text-align: left;">
                                ১৪ । এই মর্মে আমি অঙ্গীকার করছি যে, আমার দেওয়া উপরুক্ত বিবরণ/ তথ্যাদি সম্পূর্ণ সঠিক। আমি নির্ধারিত বেতনে আবেদিত পদে অস্থায়ীভাবে এলিট সিকিউরিটি সার্ভিসেস লিমিটেড, চট্টগ্রাম এলাকায় করতে আগ্রহী।  আমি সজ্ঞানে পড়ে ও বুজে নিন্মে সাক্ষর করলাম।
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: left; padding-top: 2rem;"><label for="">তারিখ: 01-05-2023</label></td>
                            <td colspan="5" style="text-align: right; padding-top: 2rem; padding-right: 30px;"><label for="">(আবেদনকারীর সাক্ষর)</label></td>
                        </tr>
                    </tbody>
                </table>
                <table style="width: 100%; margin-top: 2rem;">
                    <tbody>
                        <tr>
                            <td colspan="2" style="text-align: left;">তারিখ:</td>
                        </tr>
                        <tr>
                            <td  style="text-align: left; padding-left: 45px;">
                                <p style="padding-top: 20px; margin: 0px;">পরিচালক</p>
                                <p style="margin: 0px;">এলিট সিকিউরিটি সার্ভিসেস লি:</p>
                                <p style="margin: 0px;">বাড়ি-২, রোড-, লেন-২, ব্লক-কে,</p>
                                <p style="margin: 0px;">হালিশহর হাউসিং এষ্টেট, চট্টগ্রাম।</p>
                            </td>
                        </tr>
                        <tr>
                            <td  style="text-align: left; ">
                                <label for="">বিষয়:</label>
                                <span style="border-bottom: solid 1px;"><b>নিরাপত্তা প্রহরী/মহিলা প্রহরী/ সুপারভাইজার পদে নিয়োগের জন্য আবেদন।</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left;">জনাব,</td>
                        </tr>
                        <tr>
                            <td  style="text-align: left;">
                                <p style="padding-top: 12px; margin: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;বিশ্বস্ত সূত্রে জানিতে পারলাম <b>"এলিট সিকিউরিটি সার্ভিসেস লি "</b> এর অধীনে কিছু সংখক নিরাপত্তা প্রহরী/মহিলা প্রহরী/সুপারভাইজার নিয়োগ করা হইব।  উক্ত নিরাপত্তা প্রহরী/মহিলা প্রহরী/সুপারভাইজার পদে একজন আগ্রহী প্রার্থী হিসেবে নিন্মে আমার জীবন বৃত্তান্ত পেশ করলাম:-</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table style="widht:100%;">
                    <tbody>
                        <tr>
                            <th class="py-2" style="width: 25%;">১. নাম</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_applicants_name }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">২. পিতা নাম </th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_fathers_name }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৩. মাতার নাম </th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_mothers_name }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৪. স্থায়ী ঠিকানা </th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 36%;">
                                <p style="margin: 2px;">গ্রাম: {{ $employees->bn_parm_village_name }}</p>
                                <p style="margin: 2px;">উপজেলা: {{ $employees->bn_parm_upazilla?->name_bn }}</p>
                                <p style="margin: 2px;">মোবাইল নং: {{ $employees->bn_parm_phone_alt }}</p>
                            </td>
                            <td class="py-2" style="width: 36%;">
                                <p style="margin: 2px;">পোঃ {{ $employees->bn_parm_post_ofc }}</p>
                                <p style="margin: 2px;">জেলা: {{ $employees->bn_parm_district?->name_bn }}</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৫. বর্তমান ঠিকানা </th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 36%;">
                                <p style="margin: 2px;">হোল্ডিং/বাসা নং {{ $employees->bn_pre_holding_no }}</p>
                                <p style="margin: 2px;">উপজেলা : {{ $employees->bn_upazilla?->name_bn }}</p>
                            </td>
                            <td class="py-2" style="width: 36%;">
                                <p style="margin: 2px;">পোঃ {{ $employees->bn_pre_post_ofc }}</p>
                                <p style="margin: 2px;">গ্রাম/সড়ক: {{ $employees->bn_pre_village_name }}</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৬. শিক্ষাগতা যোগ্যতা</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2"> {{ $employees->bn_edu_qualification }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৭. জন্ম তারিখ</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_dob }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৮. বয়স</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            @php
                            $birthDate = $employees->bn_dob;
                            $age = \Carbon\Carbon::parse($birthDate)->age;
                            @endphp

                            <td class="py-2" style="width: 73%;" colspan="2">{{ $age }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">৯. জাতীয়তা</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_nationality }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">১০. ধর্ম</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->religion?->name_bn }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">১১. অভিজ্ঞতা</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_experience }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" style="width: 25%;">১২. মোবাইল নং</th>
                            <td class="py-2" style="width: 2%;">:</td>
                            <td class="py-2" style="width: 73%;" colspan="2">{{ $employees->bn_parm_phone_my }}</td>
                        </tr>
                        <tr>
                            <th class="py-2" colspan="3">অতএব উপরুক্ত তথ্যাদি আলোকে আমাকে উক্ত পদে নিয়োগ দিলে বাদিত থাকিব।</th>
                        </tr>
                        <tr>
                            <th class="py-2" colspan="3">বিনীত নিবেদক</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="padding-top: 5rem;">আবেদনকারীর সাক্ষর</th>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-5">
                    <h5 style="padding-top: 3rem;">ফরম নং-১৫ </h5>
                    <p style="margin: 2px;">ধারা ৩৪, ৩৬, ৩৭ ও ২৭৭ এবং বিধি ৩৪ (১) ও ৩৩৬ (৪)</p>
                    <p style="margin: 2px;"><b>বয়স ও সক্ষমতার প্রত্যয়নপত্র</b></p>
                </div>
                <table class="tbl_border" style="width: 100%;">
                    <tbody>
                        <tr class="tbl_border" style="text-align: center;">
                            <th class="tbl_border">বয়স ও সক্ষমতার প্রত্যয়নপত্র</th>
                            <th class="tbl_border">বয়স ও সক্ষমতার প্রত্যয়নপত্র</th>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">১ । ক্রমিক নং {{ $employees->id }}</td>
                            <td class="tbl_border">১ । ক্রমিক নং {{ $employees->id }}</td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">তারিখ {{ date('d-M-Y', strtotime($employees->created_at)) }}</td>
                            <td class="tbl_border">তারিখ {{ date('d-M-Y', strtotime($employees->created_at)) }}</td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">২ । নাম</td>
                            <td class="tbl_border">{{ $employees->bn_applicants_name }}</td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">২ । পিতার নাম: {{ $employees->bn_fathers_name }}</td>
                            <td class="tbl_border">
                                আমি এই মর্মে প্রত্যয়ন করিতেছি যে (নাম )<input type="text" class="sminput"  value="{{ $employees->bn_applicants_name }}">পিতা:<input type="text" class="sminput"  value="{{ $employees->bn_fathers_name }}">মাতা:<input type="text" class="sminput"  value="কামাল">ঠিকানা :<input type="text" class="semiTinput"  value="কামাল">কে আমি পরীক্ষা করিয়াছি।
                            </td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">৩ । মাতার নাম:</td>
                            <td  class="tbl_border">
                                আমি এই মর্মে প্রত্যয়ন করিতেছি যে (নাম )<input type="text" class="sminput"  value="কামাল">পিতা:<input type="text" class="sminput"  value="কামাল">মাতা:<input type="text" class="sminput"  value="{{ $employees->bn_mothers_name }}">ঠিকানা :<input type="text" class="semiTinput"  value="ঠিকানা">কে আমি পরীক্ষা করিয়াছি।
                            </td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">৪ । লিঙ্গ: পুরুষ/মহিলা
                            </td>
                            <td  class="tbl_border">
                                তিনি প্রতিষ্টানে নিযুক্ত হইতে ইচ্ছুক এবং আমার পরীক্ষা হইতে এইরূপ পাওয়া গিয়াছে যে তাহার বয়স<input type="text" class="verySmall"  value="30">বছর এবং তিনি প্রতিষ্টানে প্রাপ্ত বয়স্ক/কিশোর হিসাবে নিযুক্ত হইবার যুগ্য।
                            </td>
                        </tr>
                        <tr class="tbl_border">
                            <td style="width: 40%;"  class="tbl_border">৫ । স্থায়ী ঠিকানা <br>

                                <label for="">গ্রাম:</label>{{ $employees->bn_parm_village_name }}&nbsp;&nbsp;
                                <label for="">পোঃ:</label>{{ $employees->bn_parm_post_ofc }}&nbsp;&nbsp;<br>
                                <label for="">উপজেলা:</label>{{ $employees->bn_parm_upazilla?->name_bn }} &nbsp;&nbsp;<br>
                                <label for="">জেলা:</label>{{ $employees->bn_parm_district?->name_bn }}
                            </td>
                            <td  class="tbl_border">
                                তাহার সনাক্তকরণের চিহ্ন :<input type="text" class="verySmall"  value="30">
                            </td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">৬ । অস্থায়ী/যুগযুগের ঠিকানা - হোল্ডিং নং -<br>
                                <label for="">গ্রাম/সড়ক:</label>{{ $employees->bn_pre_village_name }}&nbsp;&nbsp;
                                <label for="">পোঃ:</label>{{ $employees->bn_pre_post_ofc }}&nbsp;&nbsp;<br>
                                <label for="">উপজেলা:</label>{{ $employees->bn_upazilla?->name_bn }} &nbsp;&nbsp;<br>
                                <label for="">জেলা:</label>{{ $employees->bn_district?->name_bn }}
                            </td>
                            <td  class="tbl_border"></td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">৮। জন্ম সনদ/শিক্ষা সনদ অনুসারে বয়স/জন্ম তারিখ :</td>
                            <td  class="tbl_border">{{ $employees->bn_dob }}</td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">৯। দৈহিক সক্ষমতা :</td>
                            <td  class="tbl_border"></td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">১০। সনাক্তকরণ চিহ্ন :</td>
                            <td  class="tbl_border"></td>
                        </tr>
                        <tr class="tbl_border">
                            <td class="tbl_border">
                                <div class="d-flex justify-content-between p-2">
                                    <div>
                                        <img src="" alt="img">
                                        <p>সংশ্লিষ্ট ব্যক্তির সাক্ষর/টিপসহি </p>
                                    </div>
                                    <div>
                                        <img src="" alt="img">
                                        <p>রেজিস্টার্ড চিকিৎসকের সাক্ষর</p>
                                    </div>
                                </div>
                            </td>
                            <td  class="tbl_border">
                                <div class="d-flex justify-content-between p-2">
                                    <div>
                                        <img src="" alt="img">
                                        <p>সংশ্লিষ্ট ব্যক্তির সাক্ষর/টিপসহি </p>
                                    </div>
                                    <div>
                                        <img src="" alt="img">
                                        <p>রেজিস্টার্ড চিকিৎসকের সাক্ষর</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</section>

<script>
    function printDiv(divName) {
        var prtContent = document.getElementById(divName);
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write('<link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" type="text/css"/>');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.onload =function(){
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
    }
</script>
@endsection
