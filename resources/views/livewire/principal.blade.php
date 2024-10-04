<div>
   
    <div name="Container" class="flex flex-col justify-center items-center w-full text-white lg:flex-row lg:px-10">
        
            <div class=" pb-10 pt-20 w-full justify-center items-center text-center flex flex-col lg:text-start lg:items-start lg:w-[50%] lg:pl-[10%] lg:pb-0 ">
                <h1 class="text-9xl text-[#f4ff5d] mb-3 motion-safe:animate-bounce"  ><strong>Brilla</strong></h1>
                <h2 class="text-7xl	font-medium mb-3">Con cada instante</h2>
                <h3 class="font-light text-3xl">joyas que cuentan tu historia</h3>

                <div name="media" class="pt-5 flex">
                    <a href="#"> <x-bi-facebook class="w-12 h-12 hover:scale-125 ease-in duration-200"/></a>
                    <a class="px-10" href="#"><x-bi-instagram class="w-12 h-12 hover:scale-125 ease-in duration-200"/></a>
                    <a class="pr-10" href="#"><x-bi-youtube class="w-12 h-12 hover:scale-125 ease-in duration-200"/></a>
                </div>
            </div>
            <div name="image" class="lg:w-[50%] w-full flex">
                <img class="lg:h-[600px] lg:w-156 " src="{{URL('images/model1.png')}}" alt="Image">
            </div>
       
    </div>

    
    <div class="w-full flex justify-center items-center pt-36 pb-36 bg-slate-300 lg:bg-[#1f242d] lg:hover:bg-slate-300 ease-in duration-500">
        <button class="	" ><img class="h-[150px]" src="{{URL('images/logo.png')}}" alt=""></button>
    </div>

    <div class="w-full flex flex-col justify-center items-center py-10 ">
        <div class="align-center justify-center text-center ">
            <h1 class="text-7xl text-white font-medium ">Nuestros</h1> <h3 class="text-white text-4xl">Productos</h3>
        </div>
        <div class="flex items-center w-[95%] pt-10 flex-col py-5 lg:flex-row lg:justify-between ">
            <div class="w-full flex items-center justify-center lg:w-[100%] lg:py-0">
                <img src="{{URL('images/joyeria1.png')}}" alt="Card Preview" class="rounded-2xl shadow-2xl	shadow-black w-[90%]  hover:scale-105 ease-in duration-300">
            </div>
            
            <div class="w-full flex items-center justify-center py-5 lg:w-[90%] lg:py-0">
                <img src="{{URL('images/joyeria2.png')}}" alt="Card Preview" class="rounded-2xl shadow-2xl	shadow-black w-[90%]  hover:scale-105 ease-in duration-300">
            </div>
            <div  class="w-full flex items-center justify-center py-5 lg:w-[90%] lg:py-0">
                <img src="{{URL('images/joyeria3.png')}}" alt="Card Preview" class="rounded-2xl shadow-2xl	shadow-black w-[90%]  hover:scale-105 ease-in duration-300">
            </div>
        </div>
    </div>
    
    <div class="pb-10 pt-10 flex justify-center items-center flex-col lg:mx-[20%] ">
        <h1 class="text-7xl text-white font-medium italic">Contacto</h1>
            <div class="items-center justify-center w-full lg:w-[50%] ">
                <div class="py-1  ">
                    <x-input placeholder="Tu nombre" icon="o-user" class="text-white  bg-slate-700 border-[#1f242d]" />
                </div >
                <div class="py-1">
                    <x-input placeholder="Email" icon="c-at-symbol" class="text-white bg-slate-700 border-[#1f242d]" />
                </div>
                <div class="py-1">
                    <x-textarea class="text-white  bg-slate-700 border-[#1f242d]"
                    label="Mensaje"
                    placeholder=""
                    rows="5"
                    inline />
                </div>

                <div class="justify-center items-center w-full flex">
                    <x-button label="Enviar"  />
                </div>
            </div>
    </div>
    
</div>
