@extends('home.layout')
@section('title','MSME')

@section('content')

<section class="committee container my-4">
  <div class="row g-3">
 @foreach($comettie as $cmt)
        <div class="col-12 col-sm-6 col-md-3">
            <div class="box-1">{{ $cmt->cmt_name }}</div>
        </div>
    @endforeach

  </div>

</section>


<section class="direction ">
<div class="row justify-content-center">
<div class="col-md-6 right d-flex flex-column justify-content-center align-items-center text-center" style="height: 500px;">
    <div>
        <h3 class="about">About Us</h3>
        <img class="image-msme" src="{{asset('home/image/msme (1).png')}}" alt="" class="img-fluid my-3">
        <p class="mt-4">
            The Micro, Small and Medium Enterprises Association (MSME) is
            a not-for-profit organisation established in 2018 for entrepreneurs, by entrepreneurs.
        </p>
    </div>
</div>

<div class="col-md-6" style="height: 500px">
    <div>
        <h3 class="team">အသင်းကြီး၏ ရည်ရွယ်ချက်များ</h3>
        <div class="mt-3">
            <p class="">၁.နေပြည်တော် အသေးစားနှင့်အလတ်စား စီးပွားရေး လုပ်ငန်းရှင်များ ဖွံ့ဖြိုးတိုးတက်စေရန်။</p>
             <p class="">၂. ဒေသခံပြည်သူများ၏ လူမှုဘဝဖွံ့ဖြိုးတိုးတက်စေရန်</p>
              <p class="">၃. လုပ်ငန်းရှင်များအချင်းချင်း နည်းပညာပူးပေါင်းဆောင်ရွက်နိုင်ရန်</p>
               <p class="">၄. လုပ်ငန်းရှင်များအချင်းချင်း အပြန်အလှန်ကူညီနိုင်ရန်</p>
                <p class="">၅. Micro စီးပွားရေးလုပ်ငန်းမှ SME စီးပွားရေး လုပ်ငန်းသို့ကူးပြောင်းနိုင်ရန်</p>
                 <p class="">၆. ဒေသတွင်းမှ ပြည်တွင်း/ပြည်ပအဆင့်သို့ ချိတ်ဆက်ဆောင်ရွက်နိုင်ရန်</p>
                  <p class="">၇. ဒေသတွင်းမှ လုပ်ငန်းရှင်များအား အသိပညာဗဟုသုတများ တိုးပွားလာအောင် စီစဉ်ဆောင်ရွက်ပေးနိုင်ရန်</p>
                   <p class="">၈. အသေးစားနှင့်အလတ်စား စီးပွားရေးမှသည် အကြီးစားစီးပွားရေး လုပ်ငန်းရှင်များ ဖြစ်ပေါ်လာစေရန်</p>
                    <p class="">၉. ဒေသတွင်း ဖွံ့ဖြိုးမှုမှသည် နိုင်ငံတော်အဆင့် ဖွံ့ဖြိုးတိုးတက်မှုအဆင့်အထိ အထောက်အကူပြုနိုင်ရန်</p>

        </div>

    </div>

</div>
    </div>
</section>





@endsection
