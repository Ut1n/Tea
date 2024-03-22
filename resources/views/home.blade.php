@extends('layouts.app')

@section('content')
    <div style="position: relative;top: -50px ;background-image: url(/public/build/assets/img/fon5.jpg);
     background-repeat: no-repeat; background-size: cover; height: 500px; background-position:bottom -120px right 0;box-shadow: inset 0 0 20px 30px rgba(0, 0, 0, 0.5);  " >
    <div style="position: relative; top: 120px ; text-shadow: 1px 1px 2px black, 0 0 1em black, 0 0 0.9em black; ">
        <h1 class="text-white text-center" >TeaEssence </h1>
        <p class="text-white text-center fs-2">―――</p>
        <p class="text-white text-center fs-2">"Раскройте чистую сущность чая с TeaEssence,</p>
        <p class="text-white text-center fs-2"> где каждый глоток рассказывает историю"</p>
    </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <h1 class="text-center m-5">О ПРОДУКТЕ</h1>
            <div class="d-flex justify-content-around align-items-center m-5 ">

                <img style="width: 400px; height: 400px;  object-fit: cover; "  src="/public/build/assets/img/ch2.jpg" class="shadow-lg  rounded " alt="...">
                <p class="w-25 fs-5">Выращивание чая начинается с выбора
                    идеального места для посадки чайных кустов.
                    Плантации расположены на лесных полянах,
                    где почва богата минералами и микроэлементами,
                    а климат идеально подходит для роста чайных листьев.
                    Благодаря этому, чай приобретает неповторимый вкус и аромат.</p>
            </div>
            <div class="d-flex justify-content-around align-items-center  m-5">

                <p class="w-25 fs-5">В чайном листе содержатся легко усваиваемые витамины С,
                    В1 и В2, а также необходимые для здоровья сосудов микроэлементы.
                    Наши чаи укрепляют иммунитет, способствуют хорошему пищеварению и
                    ускоряют расщепление жиров.</p>
                <img style="width: 400px; height: 400px;  object-fit: cover;"  src="/public/build/assets/img/ch.jpg" class="shadow-lg   bg-body rounded " alt="...">
            </div>
        </div>

    </div>
</div>
@endsection
