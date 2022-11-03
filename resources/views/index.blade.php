@extends('layout.default')

@section('page-content')
   <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Gudeg <span class= "text-pink-500" >Yogyakarta</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">Scroll to learn more</h3>
        </div>
   </section>

<section class = "py-20">
    <div class="max-w-screen-md mx-auto">
         <h3 class="text-4xl font-bold mb-6">Introduction</h3>
         <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
           <p class="mb-6"> 
                 Gudeg dikenal baik sebagai kuliner khas Yogyakarta yang lezat menggugah selera.
                 Ini merupakan kuliner daerah yang tak pernah sepi penggemar karena sudah melekat di setiap lidah pencintanya.
                        Penjelasan Lebih lanjut dapat menekan tombol Learn more
             </p>
            <a href="{{ url('https://phinemo.com/sejarah-gudeg-kuliner-jogja/') }}"class="bg-pink-500 text-center py-2 
            px-4 rounded hover:bg-purple-500 transition">Learn more</a>
        </div>
    </section>

    <section class = "py-20">
        <div class="max-w-screen-md mx-auto">
             <h3 class="text-4xl font-bold mb-6">Kandungan yang dimiliki Gudeg</h3>
               <p class="mb-6"> 
                     Penjelasan berada dalam tombol Learn More
                 </p>
                <a href="{{ url('https://health.kompas.com/read/2020/03/01/121200868/kandungan-gizi-gudeg-amankah-bagi-penderita-kolesterol-tinggi-?page=all') }}"class="text-green-200 ">Learn more</a>
            </div>
        </section>

@endsection