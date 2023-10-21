@extends('PageStatic.Dashboard')


@section('page')


<div class="container p-10 ">

  

   <div class="bg-white h-96 rounded-sm mt-10 flex flex-col ">

   <div class="flex justify-center mt-4 text-green-600 ">
    <h2 class="FP-Menu ">Enregistrement client</h2>
   </div>

    <form action="{{ route('Ajout_Client') }}" method="post" >

        @csrf
        @method('post')


        <div class="flex flex-row p-3 flex-wrap justify-center">
            <div class="flex flex-row mx-4 my-4">
                <label for="nom" class="FP-Menu ml-2 p-2" >Nom du client <span class="mx-1"></span></label>
                <input type="text" name="nom" id="nom" class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " required>
            </div>
    
            <div class="flex flex-row mx-4 my-4">
                <label for="prenom" class="FP-Menu ml-2 mx-4 p-2" >Prenom du client<span></span></label>
                <input type="text" name="prenom"  class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " required>
            </div>

            <div class="flex flex-row mx-4 my-4">
                <label for="email" class="FP-Menu ml-2 p-2 " >Email du client <span class="mr-1"></span></label>
                <input type="email" name="email"  class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " >
            </div>

            <div class="flex flex-row mx-4 my-4">
                <label for="telephone" class="FP-Menu ml-2 p-2" >Numero de telephone</label>
                <input type="text" name="telephone" class="border-2  p-2  focus:outline-none focus:border-2 focus:border-blue-400 rf" required>
            </div>
           

            <div class="flex flex-row mx-4 my-4">
                <label for="societe" class="FP-Menu ml-2 p-2 " >Nom société <span class="mx-2"></span></label>
                <input type="text" name="societe"  class=" border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " >
            </div>

            <div class="flex flex-row mx-4 my-4">
                <label for="position " class="FP-Menu ml-2 p-2" >Position geographique </label>
                <input type="text" name="position"  class=" border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " >
               
            </div>

            
            
        </div>


        <div class="flex justify-center">
            <div class="flex justify-between  mt-4  w-1/3 ">
            
                <button type="submit" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-[#ADD8E6]">Ajouter </button>
                <a href="/" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:red-200">Annuler </a>
                
            
            </div>
        </div>
        

    </form>

    

      
      
    
   </div>
</div>


@endsection