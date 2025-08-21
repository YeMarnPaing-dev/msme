@extends('members.layouts')
@section('heading', 'Register Now')
@section('title', 'Register')

@section('content')

    <div class="container mt-4">

        <form action="{{ route('register#create') }}" method="POST">
            @csrf
            <!-- အမည် -->
            <div class="mb-3 row">
                <h3 class="mb-3">(၁) မှတ်ပုံတင်ရန် အဆိုပြုသူ</h3>
                <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းရှင်</label>
                <div class="col-sm-9">
                    <input type="text" name="name_mm" value="{{ old('name_mm') }}"
                        class="form-control @error('name_mm') is-invalid @enderror" placeholder="အမည်">
                    @error('name_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="name_eng" value="{{ old('name_eng') }}"
                        class="form-control mt-3  @error('name_eng') is-invalid @enderror" placeholder="အင်္ဂလိပ်">
                    @error('name_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
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
                        <option>၇
                        <option>
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
                        <option>7
                        <option>
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
                    <input type="text" name="nrc_township_mm"
                        class="form-control  @error('nrc_township_mm') is-invalid @enderror" placeholder="ပမန">
                    @error('nrc_township_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="nrc_township_eng"
                        class="mt-3 form-control  @error('nrc_township_eng') is-invalid @enderror" placeholder="pamana">
                    @error('nrc_township_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
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
                    <input type="text" name="nrc_number_mm"
                        class="form-control  @error('nrc_number_mm') is-invalid @enderror" placeholder="အမှတ်">
                    @error('nrc_number_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="nrc_number_eng"
                        class="mt-3 form-control  @error('nrc_number_eng') is-invalid @enderror" placeholder="number">
                    @error('nrc_number_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!--Father အမည် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) အဖအမည်</label>
                <div class="col-sm-9">
                    <input type="text" name="father_name_mm" value="{{ old('father_name_mm') }}"
                        class="form-control  @error('father_name_mm') is-invalid @enderror" placeholder="အမည်">
                    @error('father_name_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="father_name_eng" value="{{ old('father_name_eng') }}"
                        class="form-control mt-3  @error('father_name_eng') is-invalid @enderror" placeholder="အင်္ဂလိပ်">
                    @error('father_name_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <!-- လူမျိုး -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) လူမျိုး *</label>
                <div class="col-sm-9">
                    <input type="text" name="ethinic" class="form-control  @error('ethinic') is-invalid @enderror"
                        value="{{ old('ethinic') }}" placeholder="လူမျိုး">
                    @error('ethinic')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- ကိုးကွယ်သည့်ဘာသာ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) ကိုးကွယ်သည့်ဘာသာ *</label>
                <div class="col-sm-9">
                    <input type="text" name="religion"value="{{ old('religion') }}"
                        class="form-control  @error('religion') is-invalid @enderror" placeholder="ဘာသာ">
                    @error('religion')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- ကိုးကွယ်သည့်ဘာသာ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(စ) ပညာအရည်အချင်း *</label>
                <div class="col-sm-9">
                    <input type="text" name="education" value="{{ old('education') }}"
                        class="form-control  @error('education') is-invalid @enderror" placeholder="education....">
                    @error('education')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- ကျား/မ -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဆ) ကျား/မ *</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" value="male"
                            type="radio" {{ old('gender') == 'male' ? 'checked' : '' }} name="gender" id="male">
                        <label class="form-check-label" for="male">ကျား</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" value="female"
                            type="radio" {{ old('gender') == 'female' ? 'checked' : '' }} name="gender"
                            id="female">
                        <label class="form-check-label" for="female">မ</label>
                    </div>
                    @error('gender')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဇ)မွေးသက္ကရာဇ် *</label>
                <div class="col-sm-9">
                    <input type="date" name="birthday" value="{{ old('birthday') }}"
                        class="form-control  @error('birthday') is-invalid @enderror">
                    @error('birthday')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- နTownship-->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(စျ) မြိုနယ်</label>
                <div class="col-sm-2">
                    <select name="town" class="form-select">
                        @foreach ($township as $town)
                            <option value="{{ $town->id }}" {{ old('town') == $town->id ? 'selected' : '' }}>
                                {{ $town->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ည)နေရပ်လိပ်စာ *</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="***" value="{{ old('address') }}" name="address"
                        class="form-control  @error('address') is-invalid @enderror">
                    @error('address')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဍ) ဖုန်းနံပါတ်</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="09*****"
                        class="form-control  @error('phone') is-invalid @enderror">
                    @error('phone')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- မွေးသက္ကရာဇ် -->
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဌ) အီးမေးလ်</label>
                <div class="col-sm-9">
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="@gmail.com"
                        class="form-control  @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၂) မှတ်ပုံတင်မည့် စီးပွားရေးလုပ်ငန်း</h3>



                <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းအမည်</label>

                <div class="col-sm-9">
                    <input type="text" name="work_name_mm" value="{{ old('work_name_mm') }}"
                        class="form-control  @error('work_name_mm') is-invalid @enderror" placeholder="မြန်မာ">
                    @error('work_name_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="work_name_eng" value="{{ old('work_name_eng') }}"
                        class="form-control mt-3  @error('work_name_eng') is-invalid @enderror" placeholder="အင်္ဂလိပ်">
                    @error('work_name_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လုပ်ငန်းအမျိုးအစား</label>
                <div class="col-sm-9">
                    <input type="text" name="type_mm" value="{{ old('type_mm') }}"
                        class="form-control  @error('type_mm') is-invalid @enderror" placeholder="မြန်မာ">
                    @error('type_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="type_eng" value="{{ old('type_eng') }}"
                        class="form-control mt-3  @error('type_eng') is-invalid @enderror" placeholder="အင်္ဂလိပ်">
                    @error('type_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) လုပ်ငန်းအရွယ်အစား</label>
                <div class="col-sm-2">
                    <select name="size" class="form-select">
                        <option>Micro</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Enterprise</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) လုပ်ငန်းကဏ္ဍ</label>
                <div class="col-sm-2">
                    <select name="sector" class="form-select">
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ old('sector') == $sector->id ? 'selected' : '' }}>
                                {{ $sector->sector_name_en }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) လုပ်ငန်းအမျိုးအစား</label>
                <div class="col-sm-2">
                    <select name="sector_type" class="form-select">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ old('sector_type') == $type->id ? 'selected' : '' }}>
                                {{ $type->type_name_en }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၃) လုပ်ငန်း လုပ်ကိုင်သည့် နေရာ</h3>



                <label class="col-sm-3 col-form-label">(က) တည်နေရာ</label>

                <div class="col-sm-9">
                    <input type="text" name="location_mm" value="{{ old('location_mm') }}"
                        class="form-control  @error('location_mm') is-invalid @enderror" placeholder="မြန်မာ">
                    @error('location_mm')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    <input type="text" name="location_eng" value="{{ old('location_eng') }}"
                        class="form-control mt-3  @error('location_eng') is-invalid @enderror" placeholder="အင်္ဂလိပ်">
                    @error('location_eng')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) မြေ / အဆောက်အဦး အကျယ်အဝန်း</label>
                <div class="col-sm-9">
                    <input type="text" name="wide" value="{{ old('wide') }}"
                        class="form-control  @error('wide') is-invalid @enderror" placeholder="အမည်">
                    @error('wide')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) ကိုယ်ပိုင် / အငှား *</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input @error('owner') is-invalid @enderror" value="ကိုယ်ပိုင်"
                            type="radio" name="owner" id="own"
                            {{ old('owner') == 'ကိုယ်ပိုင်' ? 'checked' : '' }}>
                        <label class="form-check-label" for="own">ကိုယ်ပိုင်</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('owner') is-invalid @enderror" value="အငှား"
                            type="radio" name="owner" id="rent" {{ old('owner') == 'အငှား' ? 'checked' : '' }}>
                        <label class="form-check-label" for="rent">အငှား</label>
                    </div>
                </div>

                @error('owner')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) စတင် လုပ်ကိုင်သည့် ခုနှစ်</label>
                <div class="col-sm-9">
                    <input type="text" name="start_year " value="{{ old('start_year') }}"
                        class="form-control  @error('start_year') is-invalid @enderror" placeholder="Example 2010">
                    @error('start_year')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၄) ရင်းနှီးမြှပ်နှံမှုတန်ဖိုး (ကျပ်သန်း)</h3>



                <label class="col-sm-3 col-form-label">(က) စက်ပစ္စည်း</label>

                <div class="col-sm-9">

                    <input type="text" name="machine" value="{{old('machine')}}" class="form-control mt-3 @error('machine') is-invalid @enderror" placeholder="Machine">
                    @error('machine')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) အဆောက်အဦး</label>
                <div class="col-sm-9">
                    <input type="text" name="building" value="{{ old('building') }}"
                        class="form-control  @error('building') is-invalid @enderror" placeholder="အမည်">
                    @error('building')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) အခြား</label>
                <div class="col-sm-9">
                    <input type="text" name="other" value="{{ old('other') }}"
                        class="form-control  @error('other') is-invalid @enderror" placeholder="Other...">
                    @error('other')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၅) ထုတ်လုပ်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                <label class="col-sm-3 col-form-label">(က) ထုတ်ကုန်ပစ္စည်းအမည်</label>

                <div class="col-sm-9">

                    <input type="text" name="product" value="{{ old('product') }}"
                        class="form-control mt-3  " placeholder="Product....">

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) ထုတ်လုပ်သည့်အမျိုးအစားပေါင်း</label>
                <div class="col-sm-9">
                    <input type="text" name="category" value="{{ old('category') }}"
                        class="form-control  " placeholder="Quantity...">


                </div>

            </div>
            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၆) ရောင်းဝယ်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                <label class="col-sm-3 col-form-label">(က) ရောင်းဝယ်မှုပြုလုပ်သည့်ကုန်ပစ္စည်း</label>

                <div class="col-sm-9">

                    <input type="text" name="sale_product" value="{{ old('sale_product') }}"
                        class="form-control mt-3  "
                        placeholder="Sale_Product....">

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လက်ကား/လက်လီ</label>
                <div class="col-sm-9">
                    <input type="text" name="order_not" value="{{ old('order_not') }}"
                        class="form-control  " placeholder="...">


                </div>

            </div>
            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၇) ဝန်ဆောင်မှုလုပ်ငန်းဖြစ်ပါက</h3>



                <label class="col-sm-3 col-form-label">(က) ဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း</label>

                <div class="col-sm-9">

                    <input type="text" value="{{ old('service') }}" name="service"
                        class="form-control mt-3 " placeholder="Service....">

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) လုပ်ငန်းအရေအတွက်</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ old('quantity') }}" name="quantity"
                        class="form-control  " placeholder="...">


                </div>

            </div>
            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၈) အခြားလုပ်ငန်းဖြစ်ပါက</h3>



                <label class="col-sm-3 col-form-label">(က) လုပ်ငန်းအမျိုးအမည်</label>

                <div class="col-sm-9">

                    <input type="text" value="{{ old('other_work') }}" name="other_work"
                        class="form-control mt-3  " placeholder="....">

                </div>

            </div>
            <hr>

            <div class="mb-3 row">
                <h3 class="mb-3">(၉ ) အလုပ်သမားခန့်ထားမှု (လျာထားချက်)</h3>



                <label class="col-sm-3 col-form-label">(က) အုပ်ချုပ်သူ</label>

                <div class="col-sm-9">

                    <input type="text" value="{{ old('leader') }}" name="leader"
                        class="form-control mt-3  @error('leader') is-invalid @enderror" placeholder="....">
                    @error('leader')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ခ) ကြီးကြပ်သူ</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ old('supervisor') }}" name="supervisor"
                        class="form-control  @error('supervisor') is-invalid @enderror" placeholder="...">
                    @error('supervisor')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဂ) ကျွမ်းကျင်လုပ်သား</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ old('smart_worker') }}" name="smart_worker"
                        class="form-control  @error('smart_worker') is-invalid @enderror" placeholder="...">
                    @error('smart_worker')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(ဃ) ရိုးရိုးလုပ်သား</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ old('normal_worker') }}" name="normal_worker"
                        class="form-control  @error('normal_worker') is-invalid @enderror" placeholder="...">
                    @error('normal_worker')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>



            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">(င) အခြား</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ old('other_worker') }}" name="other_worker"
                        class="form-control  @error('other_worker') is-invalid @enderror" placeholder="...">
                    @error('other_worker')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>





                <hr>

                <div class="mb-3 row">
                    <h3 class="mb-3">(၁၀) မှတ်ပုံတင်/လိုင်စင်ပြုလုပ်ခဲ့ခြင်း</h3>



                    <label class="col-sm-3 col-form-label">(က) မှတ်ပုံတင်/လိုင်စင်ထုတ်ပေးသည့်ဌာန</label>

                    <div class="col-sm-9">

                        <input type="text" value="{{ old('dept') }}" name="dept"
                            class="form-control mt-3  @error('dept') is-invalid @enderror" placeholder="....">
                        @error('dept')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">(ခ) လိုင်စင်အမှတ်/အမျိုးအစား</label>
                    <div class="col-sm-9">
                        <input type="liscense" value="{{ old('liscense') }}" name="liscense"
                            class="form-control  @error('liscense') is-invalid @enderror" placeholder="...">
                        @error('liscense')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">(ဂ) ထုတ်ပေးသည့်ရက်စွဲ</label>
                    <div class="col-sm-9">
                        <input type="date" value="{{ old('start_date') }}" name="start_date"
                            class="form-control  @error('start_date') is-invalid @enderror">
                        @error('start_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">(ဃ) သက်တမ်းကုန်ဆုံးသည့်ရက်စွဲ</label>
                    <div class="col-sm-9">
                        <input type="date" value="{{ old('end_date') }}" name="end_date"
                            class="form-control  @error('end_date') is-invalid @enderror">
                        @error('end_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>





                <!-- Submit -->
                <div class="text-center mt-4 mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
   @if(session('success'))

    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    })

@endif

@if(session('error'))

    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 2000
    })
    @endif
})

</script>

@endsection
