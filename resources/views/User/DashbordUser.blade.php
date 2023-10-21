@extends('PageStatic.Dashboard')


@section('page')


<div class="container p-10 ">

  

   <div class="bg-white h-96 rounded-sm mt-10 flex flex-row justify-center items-center">

      <div class="flex flex-col shadow-lg border-2 border-black w-1/6 justify-center items-center rounded-lg mx-2 ">
         <img src="Icons/filtre.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
         <a href="" class="bg-indigo-200 p-2 rounded-lg my-4">Vente</a>
      </div>

      <div class="flex flex-col shadow-lg border-2 border-black w-1/6 justify-center items-center rounded-lg mx-2">
         <img src="Icons/stock.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer" >
         <a href="" class="bg-indigo-200 p-2 rounded-lg my-4">Stock</a>
      </div>


      <div class="flex flex-col shadow-lg border-2 border-black w-1/6 justify-center items-center rounded-lg mx-2">
         <img src="Icons/customer.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
         <a href="{{ route('Ajout_Client')}}" class="bg-indigo-200 p-2 rounded-lg my-4">Nouveau client</a>
      </div>

      <div class="flex flex-col shadow-lg border-2 border-black w-1/6 justify-center items-center rounded-lg mx-2">
         <img src="Icons/creancier.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
         <a href="" class="bg-indigo-200 p-2 rounded-lg my-4">Creancier</a>
      </div>

    
      <div class="flex flex-col shadow-lg border-2 border-black w-1/6 justify-center items-center rounded-lg mx-2">
         <img src="Icons/time.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
         <a href="" class="bg-indigo-200 p-2 rounded-lg my-4">Heure Pointe</a>
      </div>

      
      
    
   </div>
</div>


@endsection