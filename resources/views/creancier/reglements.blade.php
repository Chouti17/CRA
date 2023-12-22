@extends('PageStatic.Dashboard')

@section('page_titre')
   Produit
@endsection

@section('page')

<div class="container p-10 ">

  

    <div class="bg-white rounded-sm mt-10 flex flex-col sm:h-full ">
 
    <div class="flex justify-center mt-4 text-blue-600 ">
     <h2 class="FP-Menu ">Ajouter creancier</h2>
    </div>
 
     <form action="{{ route('Ajout_Client') }}" method="post" >
 
         @csrf
         @method('post')
 
 
         <div class="flex flex-row p-3 flex-wrap justify-center  ">
             
 
             <div class="flex flex-row mx-4 my-4 md:w-1/3  justify-center">
                 <label for="email" class="FP-Menu ml-2 p-2 justify-center" >Clients <span class="mr-1"></span></label>
                 <input type="email" name="email"  class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " >
             </div>
 
             <div class="flex flex-row mx-4 my-4 md:w-1/2 justify-center  ">
                 <label for="telephone" class="FP-Menu ml-2 p-2" >Montant nette du reglement</label>
                 <input type="text" name="telephone" class="border-2  p-2  focus:outline-none focus:border-2 focus:border-blue-400 rf" required>
             </div>
            
 
 
             
             
         </div>
 
 
         <div class="flex justify-center mb-4">
             <div class="flex justify-between  mt-4  w-1/3 ">
             
                 <button type="submit" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-[#ADD8E6]">Ajouter </button>
                 <a href="{{ route('Dashboard')}}" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-red-400">Annuler </a>
                 
             
             </div>
         </div>
         
 
     </form>
 
     
 
       
       
     
    </div>
 </div>
 
 

@endsection