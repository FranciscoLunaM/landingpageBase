<div>
   
    <div name="Container" class="w-full  flex justify-center items-center items-strech relative px-10  text-white ">
        <div class=" w-[50%] pl-[10%]  ">
            <h1 class="text-9xl text-[#f4ff5d] mb-3 "  ><strong>Brilla</strong></h1>
            <h2 class="text-7xl	font-medium mb-3	">Con cada instante</h2>
            <h3 class="font-light text-3xl	">joyas que cuentan tu historia</h3>

            <div name="media" class="pt-5">
                <a class="pr-5" href="">#</a>
                <a class="pr-5" href="">#</a>
                <a class="pr-5" href="">#</a>
                <a class="pr-5" href="">#</a>
                
            </div>
        </div>
        <div name="image" class="w-[50%] ">

            <img class="h-[600px] w-156" src="{{URL('images/model1.png')}}" alt="Image">

        </div>
    </div>

    
    <div class="w-full flex justify-center items-center pt-36 pb-36 hover:bg-slate-500 ease-in duration-500">
        <button class="	" ><img class="h-[150px]" src="{{URL('images/logo.png')}}" alt=""></button>
    </div>
    
    <div class="pb-10 pt-10 flex justify-center items-center">
        <x-card title="Contacto" class="w-[40%] bg-[#818181] text-white" shadow separator>
            <div>
                <div class="py-1">
                    <x-input label="Tu nombre" icon="o-user" class="text-black py-3" />
                </div >
                <div class="py-1">
                    <x-input label="Email" icon="c-at-symbol" class="text-black py-3" />
                </div>
                <div class="py-3">
                    <x-textarea class="pt-4" class="text-black py-3"
                    label="Mensaje"
                    placeholder=""
                    rows="5"
                    inline />
                </div>
                
                <x-button label="Enviar" icon="o-check" />

            </div>
        </x-card>
    </div>
    
</div>
