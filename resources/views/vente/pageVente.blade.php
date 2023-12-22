@extends('PageStatic.Dashboard')

@section('page_titre')
    Ajouter Produit
@endsection

@section('page')
<div class="container p-10 ">



    <div class="bg-white rounded-sm  flex flex-col sm:h-full " style="min-height: 60vh">

        <div class="flex justify-center mt-4 text-blue-600 ">
            <h2 class="FP-Menu ">Vendre Produits</h2>
        </div>

        <div class="flex flex-row  " style="min-width: 600px ,">

            <div class="w-1/2 p-2" >


                <div class=" Fp-Menu flex flex-row justify-center">
                    <h3 class="FP-Menu">Ajout produit</h3>
                </div>
                <div class="p-2 ">
                    <form action="{{ route('Search')}}" method="post">
                        @csrf
                    <div class="flex flex-row p-2 w-full ">
                        <label for="" class="p-2 FP-Menu text-xs ">N° Reférence</label>
                        <div class="w-1/2">
                            <input type="text" name="reference" class=" border-2 p-2 w-full focus:outline-none focus:border-2 focus:border-blue-400 ">
                        </div>

                        <div class="">
                            <button type="submit">
                              <img src="Icons/recherche.png" alt="search" class="ml-4 cursor-pointer w-12">
                            </button>
                        </div>

                    </div>
                    </form>




                    <div class="mt-5 flex p-2 w-full " style="min-width: 200px">
                        <table class="border-separate border border-slate-300 hidden md:block">
                            <thead>
                                <tr class="bg-[#F8FAFC]">
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-5  text-xs">
                                    Nom du produit
                                 </th>
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-5  text-xs">
                                    N° Référence
                                 </th>
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-5  text-xs">
                                    Prix produit
                                 </th>

                               </tr>
                            </thead>


                            <tbody>
                               <tr>

                                  <td class="FP-Menu text-xs  font-thin border border-slate-300 p-2">
                                  @if($resultat)
                                  @foreach ($resultat as $result)
                                    {{ $result->nom}}
                                  @endforeach
                                  @else
                                  auccun
                                  @endif
                                  </td>
                                  <td class="FP-Menu text-xs font-thin text-blue-600 border border-slate-300 p-2">
                                    @if($resultat)
                                    @foreach ($resultat as $result)
                                      {{ $result->reference}}
                                    @endforeach
                                    @else
                                    auccun
                                    @endif
                                  </td>
                                  <td class="FP-Menu text-xs font-thin border border-slate-300 p-2">
                                    @if($resultat)
                                    @foreach ($resultat as $result)
                                      {{ $result->prix}}
                                    @endforeach
                                    @else
                                    auccun
                                    @endif
                                  </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-5 flex p-2 w-full " style="min-width: 200px">
                        <table class="border-separate border border-slate-300 hidden md:block">
                            <thead>
                                <tr class="bg-[#F8FAFC]">
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-5  text-xs">
                                    Categorie
                                 </th>
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-7  text-xs">
                                    Marque
                                 </th>
                                 <th class="FP-Menu text-xs font-thin border border-slate-300 py-3 px-5  text-xs">
                                    Quantité disponible
                                 </th>

                               </tr>
                            </thead>


                            <tbody>
                               <tr>

                                  <td class="FP-Menu text-xs  font-thin border border-slate-300 p-2">
                                    @if($resultat)
                                    @foreach ($resultat as $result)
                                      {{ $result->categorie}}
                                    @endforeach
                                    @else
                                    auccun
                                    @endif
                                  </td>
                                  <td class="FP-Menu text-xs font-thin border border-slate-300 p-2">
                                    @if($resultat)
                                    @foreach ($resultat as $result)
                                      {{ $result->marque}}
                                    @endforeach
                                    @else
                                    auccun
                                    @endif
                                  </td>
                                  <td class="FP-Menu text-xs font-thin border border-slate-300 p-2">
                                    @if($resultat)
                                    @foreach ($resultat as $result)
                                      {{ $result->quantite }}
                                    @endforeach
                                    @else
                                    auccun
                                    @endif
                                  </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4" >
                        <div class="flex  mt-4 w-full">

                            <button type="submit" class="FP-Menu bg-indigo-200 p-2 mx-1 rounded-sm hover:bg-[#ADD8E6]">Ajouter </button>
                            <a onclick="" class="FP-Menu bg-indigo-200 p-2 rounded-sm 0 hover:bg-red-400 hover:cursor-pointer" style="margin-left: 150px">Annuler </a>


                        </div>
                    </div>





                </div>


            </div>
            <div class="bg-black" style="min-width:10px">





            </div>
            <div class="h-96  w-1/2 p-2" >

                <div class=" Fp-Menu flex flex-row justify-center"><h3 class="FP-Menu">Panier</h3></div>


                <div class="h-full flex flex-col justify-center w-full items-center">
                    <p class="FP-Menu text-sm font-thin text-blue-400 ">Aucun produit ajouté</p>
                </div>


            </div>

        </div>



    </div>
 </div>




@endsection
