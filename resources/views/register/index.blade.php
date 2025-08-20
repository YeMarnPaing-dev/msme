@extends('members.layouts')
@section('heading', 'Register Now')
@section('title', 'Register')

@section('content')

    <div class="container mt-4">

        <form action="{{route('register#create')}}" method="POST">
            @csrf
            <!-- အမည် -->
            <div class="mb-3 row">
                 <h3 class="mb-3">(၁) မှတ်ပုံတင်ရန် အဆိုပြုသူ</h3>
                <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းရှင်</label>
                <div class="col-sm-9">
                    <input type="text" name="name_mm" class="form-control" placeholder="အမည်">
                    <input type="text" name="name_eng" class="form-control mt-3" placeholder="အင်္ဂလိပ်">
                </div>

            </div>

            <!-- နိုင်ငံသားစိစစ်ရေး -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) နိုင်ငံသားစိစစ်ရေး ကဒ်ပြားအမှတ်</label>
                <div class="col-sm-2">
                    <select name="nrc_region_mm" class="form-select">
                        <option>၁</option>
                        <option>၂</option>
                        <option>၃</option>
                        <option>၄</option>
                        <option>၅</option>
                        <option>၆</option>
                        <option>၇<option>
                        <option>၈</option>
                        <option>၉</option>
                        <option>၁၀</option>
                        <option>၁၁</option>
                        <option>၁၂</option>
                        <option>၁၃</option>
                        <option>၁၄</option>
                    </select>

                    <select name="nrc_region_eng" class="mt-3 form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7<option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                    </select>

                </div>
                <div class="col-sm-2">
                    <input type="text" name="nrc_township_mm" class="form-control" placeholder="ပမန">
                    <input type="text" name="nrc_township_eng" class="mt-3 form-control" placeholder="pamana">
                </div>
                <div class="col-sm-2">
                    <select name="nrc_type_mm" class="form-select">
                        <option>နိုင်</option>
                        <option>ပြု</option>
                    </select>

                     <select name="nrc_type_eng" class="mt-3 form-select">
                        <option>N</option>
                        <option>P</option>
                    </select>
                </div>
                   <div class="col-sm-3">
                    <input type="text" name="nrc_number_mm" class="form-control" placeholder="အမှတ်">
                    <input type="text" name="nrc_number_eng" class="mt-3 form-control" placeholder="number">
                </div>
            </div>

                   <!--Father အမည် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) အဖအမည်</label>
                <div class="col-sm-9">
                    <input type="text" name="father_name_mm" class="form-control" placeholder="အမည်">
                    <input type="text" name="father_name_eng" class="form-control mt-3" placeholder="အင်္ဂလိပ်">
                </div>

            </div>

               <!-- လူမျိုး -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) လူမျိုး *</label>
                <div class="col-sm-9">
                    <input type="text" name="ethinic" class="form-control" placeholder="လူမျိုး">
                </div>
            </div>

               <!-- ကိုးကွယ်သည့်ဘာသာ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) ကိုးကွယ်သည့်ဘာသာ *</label>
                <div class="col-sm-9">
                    <input type="text" name="religion" class="form-control" placeholder="ဘာသာ">
                </div>
            </div>

               <!-- ကိုးကွယ်သည့်ဘာသာ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(စ) ပညာအရည်အချင်း *</label>
                <div class="col-sm-9">
                    <input type="text" name="education" class="form-control" placeholder="ဘာသာ">
                </div>
            </div>

                 <!-- ကျား/မ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဆ) ကျား/မ *</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" value="male" type="radio" name="gender" id="male">
                        <label class="form-check-label"  for="male">ကျား</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="female" type="radio" name="gender" id="female">
                        <label class="form-check-label"  for="female">မ</label>
                    </div>
                </div>
            </div>

                   <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဇ)မွေးသက္ကရာဇ် *</label>
                <div class="col-sm-9">
                    <input type="date" name="birthday" class="form-control">
                </div>
            </div>

               <!-- နTownship-->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(စျ) မြိုနယ်</label>
                <div class="col-sm-2">
                    <select name="town" class="form-select">
                        <option>၁</option>
                        <option>၂</option>
                    </select>
            </div>
        </div>

                  <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ည)နေရပ်လိပ်စာ *</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="***" name="address" class="form-control">
                </div>
            </div>

                     <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဍ) ဖုန်းနံပါတ်</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" placeholder="09*****" class="form-control">
                </div>
            </div>

                       <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဌ) အီးမေးလ်</label>
                <div class="col-sm-9">
                    <input type="email" name="email" placeholder="@gmail.com" class="form-control">
                </div>
            </div>

           <hr>




            {{-- <!-- လွန်ခဲ့သောနေ့ရက် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(က) လွန်ခဲ့သောနေ့ရက်</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control">
                </div>
            </div> --}}












            <!-- Submit -->
            <div class="text-center mt-4 mb-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>





@endsection
