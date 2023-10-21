
<!--Entete (Structure de base)-->

    <div class="flex flex-row h-full w-full bg-[#F1F5F9]">

        <div class="h-screen bg-[#212B36] w-64 shadow-ld">
            
            <div class="text-white px-4 cursor-pointer">

                <h2 class="FP-titre py-4 text-lg cursor-pointer">CRA & Fils</h2>

                <div class="flex flex-row h-5 w-5 mb-5 mt-3">

                    <img src="Icons/home.svg" alt="" class="mr-2">

                    <h2 class="FP-Menu">Dashbord</h2>

                </div>

                
                <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer">

                    <img src="Icons/box-open.svg" alt="" class="mr-2">

                    <h2 class="FP-Menu Menu">Produit</h2>
                    
                    <i  class="principale" onclick="Activez()" ><img src="/Icons/caret-down.svg" alt="" class="ml-10 mt-1 h-5 w-5 cursor-pointer" ></i> 
                    <i onclick="Desactivez()" class="secondaire hidden " ><img src="/Icons/caret-up.png" alt="" class="ml-10 mt-1 h-5 w-5 cursor-pointer " ></i>
                    
                </div>
                

                <div class="flex flex-row  mb-5 mt-3  cursor-pointer R1 hidden">
                    <img src="Icons/plus.png" alt="" class="mr-2 ml-3 h-5 w-5">

                    <h2 class="FP-Menu Menu" id="">Rechercher</h2>

                </div>
                <div class="flex flex-row  mb-5 mt-3 cursor-pointer A1 hidden">
                    <img src="Icons/plus.png" alt="" class="mr-2 ml-3 h-5 w-5">

                    <h2 class="FP-Menu Menu " id="S_Menuv">Ajouter </h2>

               </div>
             

               
                <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer">

                    <img src="Icons/print.svg" alt="" class="mr-2 h-5 w-5">

                    <h2 class="FP-Menu">Impression</h2><!--Faux format & Factures normaliser-->
                    
                    <i  class="principales" onclick="Activeez()" ><img src="/Icons/caret-down.svg" alt="" class="ml-10 mt-1 h-5 w-5 cursor-pointer" ></i> 
                    <i onclick="Desactiveez()" class="secondaires hidden " ><img src="/Icons/caret-up.png" alt="" class="ml-10 mt-1 h-5 w-5 cursor-pointer " ></i>
                    
                </div>
               

                <div class="flex flex-row  mb-5 mt-3  cursor-pointer R11 hidden">
                    <img src="Icons/plus.png" alt="" class="mr-2 ml-3 h-5 w-5">

                    <h2 class="FP-Menu Menu" id="">Pro Format</h2>

                </div>
                <div class="flex flex-row  mb-5 mt-3 cursor-pointer A11 hidden">
                    <img src="Icons/plus.png" alt="" class="mr-2 ml-3 h-5 w-5">

                    <h2 class="FP-Menu Menu " id="S_Menuv">Bordereau Livraison </h2>

               </div>
               <div class="flex flex-row  mb-5 mt-3 cursor-pointer A12 hidden">
                <img src="Icons/plus.png" alt="" class="mr-2 ml-3 h-5 w-5">

                <h2 class="FP-Menu Menu " id="S_Menuv">Facture Normaliser </h2>

                </div>

                <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer cursor-pointer">

                    <img src="Icons/calculator.svg" alt="" class="mr-2 ">

                    <h2 class="FP-Menu">Comptabilité</h2>
                    
                </div>

                <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer">

                    <img src="Icons/chat-arrow-grow.svg" alt="" class="mr-2">

                    <h2 class="FP-Menu">statistique</h2>
                    
                </div>

                <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer">

                    <img src="Icons/time-past.svg" alt="" class="mr-2">

                    <h2 class="FP-Menu">Historique</h2>

                 </div>

                 <div class="flex flex-row h-5 w-5 mb-5 mt-3 cursor-pointer">

                    <img src="Icons/user.svg" alt="" class="mr-2">

                    <h2 class="FP-Menu">Profil</h2>

                </div>
            </div>
            

        </div>
        <div class="flex flex-col w-full">

            <nav class="flex bg-white h-16 w-full shadow-lg justify-between" >
            
                <div class="flex mt-2">
    
                    <div class="flex h-5 w-5 mb-5 mt-3 items-center">
    
                        <img src="Icons/menu-burger.svg" alt="" class="ml-3 mr-10 cursor-pointer">
    
                          <!--Formulaire-->
                        <div>
                            
                        <form action="" method="post">
                            <input type="text" placeholder="Rechercher" class="shadow-lg border-2 rounded-lg p-2 border-indigo-500/50 w-60" >
                        </form>
                        </div>
                    </div>
                    
                    
    
                </div>
                <div class="flex flex-row space-x-10 mr-20  mb-5 mt-3 items-center">
    
                        <!--Notification-->
    
                        <div class="bg-[#CDD0D4]  rounded-full w-10 h-10 flex items-center">
    
                        <img src="Icons/bell-regular.svg" alt="" class="ml-3 mr-10 cursor-pointer w-4 h-4">
    
                        </div>
    
                        <!---Message-->
    
                        <div class="bg-[#CDD0D4] rounded-full w-10 h-10 flex items-center ">
    
                        <img src="Icons/envelope-regular.svg" alt="" class="ml-3 mr-10 cursor-pointer w-4 h-4">
    
                        </div>
    
    
                        <!---Profil-->
    
                        <div class="bg-[#CDD0D4] rounded-full w-10 h-10 ">
    
                       
    
                        </div>
    
                        <!---time--> 
    
                        <div>
                            <p class="FP-Menu">Time</p>
                        </div>
                 </div>
                 
    
             </nav>

            <div>
                    @yield('page')
             </div>
            </div>    
    
        

       


       



</div>




    

