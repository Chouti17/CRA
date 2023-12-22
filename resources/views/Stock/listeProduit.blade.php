@extends('PageStatic.Dashboard')

@section('page_titre')
    Ajouter Produit
@endsection

@section('page')
<div class="container p-10 h-full ">



    <div class="bg-white rounded-sm mt-5 flex flex-col sm:h-full ">

    <div class="flex justify-center mt-4 text-indigo-400 ">
     <h2 class="FP-Menu ">Liste des Produits</h2>
    </div>
    <a href="{{ route('tri', ['categorie' => 'all', 'direction' => request('direction') === 'desc' ? 'asc' : 'desc']) }}">
        Titre
    </a>
    <div class="flex flex-row justify-center w-full p-2 mt-4 grid gap-x-2  grid-cols-2">

        <div class="flex flex-row justify-center">

            <label for="nom" class="FP-Menu ml-2 p-2 justify-center text-start " >Catégorie<span class="mx-1"></span></label>
            <div class="w-40">
               <select id="categorie" name="categorie"  class="FP-Menu w-full border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 ">
                <option value="">Tout</option>
                @foreach ($Categories as $Categorie )

               <option value="{{$Categorie->id}}">{{$Categorie->nom}}</option>

                @endforeach
               </select>
            </div>
        </div>

        <div class="flex flex-row justify-center">

            <label for="nom" class="FP-Menu ml-2 p-2 justify-center text-start " >Marque <span class="mx-1"></span></label>
            <div class="w-40">
               <select id="categorie" name="categorie"  class="FP-Menu w-full border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 ">
                <option value="">Tout</option>
                @foreach ($Produits as $Produit )

               <option value="{{$Produit->id}}">{{$Produit->marque}}</option>

                @endforeach
               </select>
            </div>
        </div>

    </div>

    <div class="mt-2 flex justify-center w-full p-2" style="min-width: 400px">
        <table class="border-separate border border-slate-300 hidden md:block">
            <thead>
                <tr class="bg-[#F8FAFC]">
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 md:px-6">
                    Nom du produit
                 </th>
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 md:px-6">
                    N° Référence
                 </th>
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 px-6">
                    Prix produit
                 </th>
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 px-6">
                    Categories
                 </th>
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 px-6">
                    Marque
                 </th>
                 <th class="FP-Menu text-base font-thin border border-slate-300 py-3 px-6">
                    Quantité disponible
                 </th>
               </tr>
            </thead>
            @foreach ($Produits as $Produit)


            <tbody>
               <tr>
                  <td class="FP-Menu text-sm font-thin border  border-slate-300 py-3 md:px-8 text-black-100">
                     {{$Produit->nom}}
                  </td>
                  <td class="FP-Menu text-sm font-thin border border-slate-300 py-3 md:px-8 text-blue-400">
                    {{$Produit->reference}}
                  </td>
                  <td class="FP-Menu text-sm font-thin border border-slate-300 py-3 md:px-8">
                    {{$Produit->prix}}
                  </td>
                  <td class="FP-Menu text-sm font-thin border border-slate-300 py-3  text-blue-400 md:px-8">
                    {{$Produit->categorie}}
                  </td>
                  <td class="FP-Menu text-sm font-thin border border-slate-300 py-3 md:px-8">
                    {{$Produit->marque}}
                  </td>
                  <td class="FP-Menu text-sm font-thin border border-slate-300 py-3 md:px-8">
                    {{$Produit->quantite}}
                  </td>

               </tr>
            </tbody>
            @endforeach

        </table>
    </div>



    </div>
 </div>

 @endsection
