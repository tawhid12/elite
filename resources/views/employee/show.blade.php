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
    </style>
    {{--  <section style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"
                    style="margin-top: 10px; margin-bottom: 10px; border-radius: 4px;">
                    <h5 class="theme-text-color" style="padding-top: 5px;"><strong>এলিট সিকিউরিটি সার্ভিসেস লিমিটেড</strong></h5>
                </div>
                <p class="text-center m-0 p-0">ভর্তি ফরম:সকল অস্থায়ী পদের জন্য</p>
                <p class="text-center m-0 p-0">বাড়ি নং-২,লেইন নং-২,রোড নং-২,ব্লক-’’কে’’</p>
            </div>
        </div>
    </section>  --}}
    <section>
        <div class="container">
            <div class="row">
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
                    <img height="150px" width="150px"  src="#" onerror="this.onerror=null;this.src='{{ asset('assets/images/logo/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
                </div>
            </div>
            <div class="" style="width:100%; margin:0 auto;">
                <table class = "gfg" style="width:100%">
                    <tbody >
                        <tr>
                            <td style="text-align: left; width:5%">১ ।</td>
                            <td style="text-align: left; width:22%">আবেদনকারীর নাম :</td>
                            <td colspan="2"><input type="text" class="tinput"  value="কামাল"></td>
                            <td colspan="2" style="text-align: center; width:20%">ভর্তির পর আইডি নং</td>
                            <td colspan="2"><input type="text" class="tinput"  value="01010101"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; width:5%">২ ।</td>
                            <td style="text-align: left; width:22%">পিতার নাম:</th>
                            <td  colspan="2"><input type="text" class="tinput"  value="জামাল"></td>
                            <td  colspan="2" style="text-align: center;">মাতার নাম:</th>
                            <td  colspan="2"><input type="text" class="tinput"  value="আছিয়া"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; width:5%">৩ ।</td>
                            <td style="text-align: left;">স্থায়ী ঠিকানা :</td>
                            <td style="text-align: left;">হোল্ডিং নং:</td>
                            <td><input type="text" class="tinput" value="১০১০১০১০১০১৯৯৯৯"></td>
                            <td style="text-align: left;">ওয়ার্ড:</td>
                            <td><input type="text" class="tinput" value="৩নং ওয়ার্ড"></td>
                            <td style="text-align: left;">গ্রাম:</td>
                            <td><input type="text" class="tinput" value="গামছাখালী"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;">ইউনিয়ন :</td>
                            <td colspan="2"><input type="text" class="tinput" value="১০১০১০১০১০১৯৯৯৯"></td>
                            <td style="text-align: left;">পোঃ :</td>
                            <td colspan="2"><input type="text" class="tinput" value="৩নং ওয়ার্ড"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;">উপজেলা :</td>
                            <td colspan="2"><input type="text" class="tinput" value="১০১০১০১০১০১৯৯৯৯"></td>
                            <td style="text-align: left;">জেলা :</td>
                            <td colspan="2"><input type="text" class="tinput" value="৩নং ওয়ার্ড"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;">মোবাইল নং(নিজ) :</td>
                            <td colspan="2"><input type="text" class="tinput" value="১০১০১০১০১০১৯৯৯৯"></td>
                            <td style="text-align: left;">বিকল্প :</td>
                            <td colspan="2"><input type="text" class="tinput" value="৯৯৮৮৭৭৭৬৬৬৬৬"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; width:5%">৪ ।</td>
                            <td style="text-align: left;">বর্তমান ঠিকানা :</td>
                            <td style="text-align: left;">হোল্ডিং নং:</td>
                            <td><input type="text" class="tinput" value="১০১০১০১০১০১৯৯৯৯"></td>
                            <td style="text-align: left;">ওয়ার্ড:</td>
                            <td><input type="text" class="tinput" value="৩নং ওয়ার্ড"></td>
                            <td style="text-align: left;">গ্রাম:</td>
                            <td><input type="text" class="tinput" value="গামছাখালী"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;"></td>
                            <td style="text-align: left;">ইউনিয়ন :</td>
                            <td colspan="2"><input type="text" class="tinput" value="৬নং চরকিং"></td>
                            <td style="text-align: left;">পোঃ :</td>
                            <td colspan="2"><input type="text" class="tinput" value="মফিজিয়া"></td>
                        </tr>
                        {{--  <tr>
                            <td style="text-align: left;">Marital Status:</td>
                            <td >
                                <input type="radio"  value=""  name="marital_status">
                                <label for="">Single</label>
                                <input type="radio" value="" name="marital_status">
                                <label for="">Married</label>
                            </td>
                            <td style="text-align: left; ">Anniversary:</td>
                            <td ><input type="text" class="sinput"  value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Spouse Name:</td>
                            <td ><input type="text" class="sinput"  value=""></td>
                            <td style="text-align: left; padding-left:5px; ">Profession:</td>
                            <td ><input type="text" class="sinput"  value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Date of Birth:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                            <td style="text-align: left; padding-left:5px;">Place:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Tel:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                            <td style="text-align: left; padding-left:5px;">Phone:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Email:</td>
                            <td colspan="3"><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Nationality:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                            <td style="text-align: left; padding-left:5px;">Blood Group:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">National ID No:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                            <td style="text-align: left; padding-left:5px;">Passport No:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Educational Qualification:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                            <td style="text-align: left; padding-left:5px;">Institution Name:</td>
                            <td ><input type="text" class="tinput" value=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">e-TIN No:</td>
                            <td colspan="3"><input type="text" class="tinput" value=""></td>
                        </tr>  --}}
                    </tbody>
                </table>
            </div>
            <div class="row">
                {{--  <h5 class="text-center">
                 অত্র ট্রেড লাইসেন্স এর মেয়াদ ৩০ শে জুন ২০২৪ পর্যন্ত।

                </h5>  --}}
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
