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

             <div class="mb-3 row">
                 <h3 class="mb-3">(၂) မှတ်ပုံတင်မည့် စီးပွားရေးလုပ်ငန်း</h3>



                 <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းအမည်</label>

                <div class="col-sm-9">
                    <input type="text" name="work_name_mm" class="form-control" placeholder="အမည်">
                    <input type="text" name="work_name_eng" class="form-control mt-3" placeholder="အင်္ဂလိပ်">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လုပ်ငန်းအမျိုးအစား</label>
                <div class="col-sm-9">
                    <input type="text" name="type_mm" class="form-control" placeholder="အမည်">
                    <input type="text" name="type_eng" class="form-control mt-3" placeholder="အင်္ဂလိပ်">
                </div>

            </div>

             <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) လုပ်ငန်းအရွယ်အစား</label>
                <div class="col-sm-2">
                    <select name="size" class="form-select">
                        <option>၁</option>
                        <option>၂</option>
                    </select>
            </div>
            </div>

                 <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) လုပ်ငန်းကဏ္ဍ</label>
                <div class="col-sm-2">
                    <select name="sector" class="form-select">
                        <option>၁</option>
                        <option>၂</option>
                    </select>
            </div>
            </div>

                         <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) လုပ်ငန်းအမျိုးအစား</label>
                <div class="col-sm-2">
                    <select name="sector_type" class="form-select">
                        <option>၁</option>
                        <option>၂</option>
                    </select>
            </div>
            </div>
            <hr>

                    <div class="mb-3 row">
                 <h3 class="mb-3">(၃) လုပ်ငန်း လုပ်ကိုင်သည့် နေရာ</h3>



                 <label class="col-sm-3 col-form-label">(က) တည်နေရာ</label>

                <div class="col-sm-9">
                    <input type="text" name="location_mm" class="form-control" placeholder="အမည်">
                    <input type="text" name="location_eng" class="form-control mt-3" placeholder="အင်္ဂလိပ်">
                </div>

            </div>

             <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) မြေ / အဆောက်အဦး အကျယ်အဝန်း</label>
                <div class="col-sm-9">
                    <input type="text" name="wide" class="form-control" placeholder="အမည်">

                </div>

            </div>

               <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) ကိုယ်ပိုင် / အငှား</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" value="ကိုယ်ပိုင်" type="radio" name="gender" id="male">
                        <label class="form-check-label"  for="own">ကိုယ်ပိုင်</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="အငှား" type="radio" name="gender" id="female">
                        <label class="form-check-label"  for="borrow">အငှား</label>
                    </div>
                </div>
            </div>

               <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) စတင် လုပ်ကိုင်သည့် ခုနှစ်</label>
                <div class="col-sm-9">
                    <input type="text" name="start_year" class="form-control" placeholder="Example 2010">

                </div>

            </div>

            <hr>

                    <div class="mb-3 row">
                 <h3 class="mb-3">(၄) ရင်းနှီးမြှပ်နှံမှုတန်ဖိုး (ကျပ်သန်း)</h3>



                 <label class="col-sm-3 col-form-label">(က) စက်ပစ္စည်း</label>

                <div class="col-sm-9">

                    <input type="text" name="Machine" class="form-control mt-3" placeholder="Machine">
                </div>

            </div>

             <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) အဆောက်အဦး</label>
                <div class="col-sm-9">
                    <input type="text" name="building" class="form-control" placeholder="အမည်">

                </div>

            </div>

                 <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) အခြား</label>
                <div class="col-sm-9">
                    <input type="text" name="other" class="form-control" placeholder="Other...">

                </div>

            </div>

            <hr>

                        <div class="mb-3 row">
                 <h3 class="mb-3">(၅) ထုတ်လုပ်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                 <label class="col-sm-3 col-form-label">(က) ထုတ်ကုန်ပစ္စည်းအမည်</label>

                <div class="col-sm-9">

                    <input type="text" name="product" class="form-control mt-3" placeholder="Product....">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) ထုတ်လုပ်သည့်အမျိုးအစားပေါင်း</label>
                <div class="col-sm-9">
                    <input type="text" name="category" class="form-control" placeholder="Cetegory...">

                </div>

            </div>
            <hr>

                             <div class="mb-3 row">
                 <h3 class="mb-3">(၆) ရောင်းဝယ်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                 <label class="col-sm-3 col-form-label">(က) ရောင်းဝယ်မှုပြုလုပ်သည့်ကုန်ပစ္စည်း</label>

                <div class="col-sm-9">

                    <input type="text" name="sale_product" class="form-control mt-3" placeholder="Sale_Product....">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လက်ကား/လက်လီ</label>
                <div class="col-sm-9">
                    <input type="text" name="order_not" class="form-control" placeholder="...">

                </div>

            </div>
            <hr>

                                <div class="mb-3 row">
                 <h3 class="mb-3">(၇) ဝန်ဆောင်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                 <label class="col-sm-3 col-form-label">(က) ဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း</label>

                <div class="col-sm-9">

                    <input type="text" name="service" class="form-control mt-3" placeholder="Service....">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လုပ်ငန်းအရေအတွက်</label>
                <div class="col-sm-9">
                    <input type="text" name="quantity" class="form-control" placeholder="...">

                </div>

            </div>
            <hr>

                                    <div class="mb-3 row">
                 <h3 class="mb-3">(၈) အခြားလုပ်ငန်းဖြစ်ပါက</h3>



                 <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းအမျိုးအမည်</label>

                <div class="col-sm-9">

                    <input type="text" name="other_work" class="form-control mt-3" placeholder="....">
                </div>

            </div>
            <hr>

                               <div class="mb-3 row">
                 <h3 class="mb-3">(၉ ) အလုပ်သမားခန့်ထားမှု (လျာထားချက်)</h3>



                 <label class="col-sm-3 col-form-label">(က) အုပ်ချုပ်သူ</label>

                <div class="col-sm-9">

                    <input type="text" name="leader" class="form-control mt-3" placeholder="....">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) ကြီးကြပ်သူ</label>
                <div class="col-sm-9">
                    <input type="text" name="supervisor" class="form-control" placeholder="...">

                </div>

            </div>

               <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) ကျွမ်းကျင်လုပ်သား</label>
                <div class="col-sm-9">
                    <input type="text" name="smart_worker" class="form-control" placeholder="...">

                </div> </div>

                 <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) ရိုးရိုးလုပ်သား</label>
                <div class="col-sm-9">
                    <input type="text" name="normal_worker" class="form-control" placeholder="...">
                </div>
                </div>



                    <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) အခြား</label>
                <div class="col-sm-9">
                    <input type="text" name="other_worker" class="form-control" placeholder="...">

                </div>





            <hr>

                               <div class="mb-3 row">
                 <h3 class="mb-3">(၁၀) မှတ်ပုံတင်/လိုင်စင်ပြုလုပ်ခဲ့ခြင်း</h3>



                 <label class="col-sm-3 col-form-label">(က) မှတ်ပုံတင်/လိုင်စင်ထုတ်ပေးသည့်ဌာန</label>

                <div class="col-sm-9">

                    <input type="text" name="dept" class="form-control mt-3" placeholder="....">
                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လိုင်စင်အမှတ်/အမျိုးအစား</label>
                <div class="col-sm-9">
                    <input type="liscense" name="supervisor" class="form-control" placeholder="...">

                </div>

            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) ထုတ်ပေးသည့်ရက်စွဲ</label>
                <div class="col-sm-9">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) သက်တမ်းကုန်ဆုံးသည့်ရက်စွဲ</label>
                <div class="col-sm-9">
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>





            <!-- Submit -->
            <div class="text-center mt-4 mb-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>





@endsection
