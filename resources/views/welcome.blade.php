@extends('layouts.index')
@section('main')
    <div class="flex flex-col font-bold decoration-4 items-center">
        <div id="carouselDarkVariant" class="relative m-3 px-3 z-[1]" data-te-carousel-init data-te-carousel-slide>
            <!-- Carousel indicators -->
            <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button data-te-target="#carouselDarkVariant" data-te-slide-to="0" data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button data-te-target="#carouselDarkVariant"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    data-te-slide-to="1" aria-label="Slide 1"></button>
                <button data-te-target="#carouselDarkVariant"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    data-te-slide-to="2" aria-label="Slide 1"></button>
            </div>

            <!-- Carousel items -->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!-- First item -->
                <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                    <img src="images/cover/affiche3.jpg" class="" alt="caroussel image" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">Bienvenue sur <b class="text-green-800 text-2xl">Epharma@237</b></h5>
                        <p>
                            Votre pharmacie en ligne Camerounaise, acheter avec et sans ordonance chez nous...
                        </p>
                    </div>
                </div>
                <!-- Second item -->
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <img src="images/cover/care.jpg" class="" alt="caroussel image" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">Faites nous confiance ! ! !</h5>
                        <p>
                            Votre satisfaction en matière de santé est notre priorité, nous mettons à votre un personnel
                            qualifier pour vos besoins et Conseils
                        </p>
                    </div>
                </div>
                <!-- Third item -->
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <img src="images/cover/affiche2.jpg" class="" alt="caroussel image" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">Livraison rapide avec un delai de 24h </h5>
                        <p>
                            Nous assurons une livraison rapide à l'adresse de votre choix, nous couvrons l'essemble de la
                            region de l'ouest.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-70 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselDarkVariant" data-te-slide="prev">
                <span class="inline-block h-8 w-8 dark:grayscale">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">préccedent</span>
            </button>
            <!-- Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-70 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselDarkVariant" data-te-slide="next">
                <span class="inline-block h-8 w-8 dark:grayscale">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">suivant</span>
            </button>
        </div>

        <div class="font-bold my-3 uppercase">
            <h1>Nos produits sante du mois</h1>
        </div>
        <div class="flex flex-row w-full h-max">
            <div
                class="border  transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4 my-5 ml-5 items-center hover:shadow-xl hover:translate-x-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/acceuil1.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-3">Soin visage </p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/minceur1.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-3">Desintoxification</p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>

            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4 h-max  my-5 ml-5 items-center hover:shadow-xl hover:translate-x-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/demaquillant1.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-3">Demaquillant </p>
                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4  my-5 mx-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/sommeil1.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-3"> Sommeil</p>
                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
        </div>
        <div class="font-bold my-3 uppercase">
            <h1>Nos produits coups de coeur</h1>
        </div>
        <div class="flex flex-row w-full">
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/visage1.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-2">Visage </p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-blackark:bg-white w-1/4  my-5 ml-5 items-center hover:shadow-xl hover:translate-x-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/acceuil2.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-2">Huile Prodiguese </p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-blackark:bg-white w-1/4 my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/demaquillant2.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-2">Nettoyant </p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-white dark:bg-white dark:text-black w-1/4  my-5 mx-5 items-center hover:shadow-xl hover:translate-x-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/visage2.jpg" alt="Logo" class="w-fit mt-3 h-full" />
                <p class="flex text-xl my-2">Soins visage </p>
                                <label class="cursor-pointer p-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"></label>
            </div>

        </div>
        <div class="font-bold my-3 uppercase">
            <h1>Nos conseils <b>sante</b> </h1>
        </div>
        <div class="flex flex-row-2 w-fit lg:mx-5 md:m-auto lg:my-3">
            <div class="bg-cover flex-auto overflow-y-scroll h-96 w-1/2 rounded-md mx-auto py-8 text-left"
                style="background-image: url('/images/cover/fond.jpg')">
                <div class="mx-1.5 mb-auto">
                    <h1 class="text-blue-600 md:text-2xl lg:text-4xl">Conseils</h1>
                    <ul class="list-disc list-inside mt-4 text-center">
                        <li class="hover:opacity-70 text-blue-700 md:text-xs lg:text-xl"><a href="#"> Comment bien choisir son
                                soin minceur </a></li>
                        <li class="hover:opacity-70 text-blue-700 md:text-xs lg:text-xl"><a href="#"> Douleur musculaire </a>
                        </li>
                        <li class="hover:opacity-70 text-blue-700 md:text-xs lg:text-xl"><a href="#"> Quelle lyposaine choisir
                                ??? </a></li>
                        <li class="hover:opacity-70 text-blue-700 md:text-xs lg:text-xl"><a href="#"> Ibuprofene : 8
                                precautions a prendre </a></li>
                        <li class="hover:opacity-70 text-blue-700 md:text-xs lg:text-xl"><a href="#"> Besoin d'aide pour
                                selectioner un produit ??? </a></li>
                    </ul>
                </div>
            </div>
            <div class="lg:ml-5 lg:mx-5 md:m-auto rounded-md h-96 overflow-y-scroll  bg-slate-200 w-1/2">
                <div class="mx-1.5 my-1.5   pt-8 h-auto ">
                    <h1 class="text-blue-600 text-center md:text-xl lg:text-3xl mx-2 my-2 font-bold">Besoin d'un conseil personaliser
                        ???<br></h1>
                    <p>Nos pharmaciens sont disponible 24/24 pour vous alors n'hesitez pas a nous contactez
                        dans le <b class="md:text-xs lg:text-xl text-blue-800">forum</b> de discussion du site ou bien a nous laisser un
                        <b class="md:text-xs lg:text-xl text-blue-800">email</b>.
                    </p>
                </div>
                <div class="bg-orange-500 h-1/2 mt-2.5 rounded-b-md text-white w-full bg-center flex flex-col">
                    <a href="{{route('chatforum')}}"class="flex m-2 hover:opacity-70   items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 hover:animate-ping mr-4 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <h6>Aller au Forum </h6>
                    </a>
                    <a href="mailto:willypericlesfoumeouamba@gmail.com"
                        class="flex hover:opacity-70  m-2 items-center"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-7 mr-4 hover:animate-bounce h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <h6>Envoyer nous un mail </h6>
                    </a>
                    <a href="tel:+237 6 52 10 05 06" class="flex m-2 hover:opacity-70 items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 hover:animate-spin mr-4 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                        </svg>

                        <h6>Contacter votre pharmacien</h6>
                    </a>
                </div>

            </div>
        </div>
        <div class="font-bold flex md:text-2xl lg:text-4xl my-3">
            <h1> <i class="text-blue-600">Pharma237</i> : Pharmacie en ligne ET Parapharmacie </h1>
        </div>
        <div class="flex flex-col text-justify  w-fit mx-5 my-3 items-center">
            <div>
                <p class="">
                    Pharma237-online est une parapharmacie et une pharmacie en ligne qui vous permet de commander des
                    médicaments
                    sans ordonnance à livrer directement chez vous. Mais quelles sont les raisons pour lesquelles vous
                    pouvez
                    faire appel à la pharmacie en ligne ? Dans la plupart des cas, cela peut provenir du fait que vous
                    n'avez
                    pas la possibilité d'aller acheter vos médicaments à la pharmacie la plus proche. Dans ce cas, il vous
                    suffit de vous rendre sur le site internet d'Illicopharma pour commander vos médicaments. Par ailleurs,
                    dans
                    certains cas, il se peut que vous ne vouliez pas que d'autres personnes sachent quel type de médicament,
                    vous voulez acheter à la pharmacie. En commandant vos médicaments en ligne, vous n'aurez plus ce genre
                    d'embarras, les pharmacies en ligne sont les garants de votre confidentialité. Il vous suffit de régler
                    le
                    prix de vos médicaments qui vous seront ensuite livrés. Chez Pharma237-online, nous avons mis en place
                    un
                    système de contrôle très strict des médicaments commandés sur notre site. En effet, nous avons défini
                    une
                    quantité maximale de produits pouvant être livrés. De plus, avant que nous validions les produits que
                    vous
                    avez commandés, nous nous assurons que vous avez bien compris le sens des notices de chaque médicament.
                </p>
                <p> <i class="text-xl my-2">L’expertise d’une équipe de pharmaciens à votre service</i><br>
                    Conscients des enjeux présents liés à la sécurité d’utilisation, à la qualité et à l’accessibilité des
                    médicaments, la pharmacie contemporaine doit répondre à de nouvelles attentes et vous garantir un
                    service
                    irréprochable. Accessible 24h/24 et 7J/7, la pharmacie en ligne vous permet de commander vos médicaments
                    et
                    produits en ligne et vous affranchit complètement des horaires d’ouverture des officines, tout en vous
                    garantissant une confidentialité et une sécurité totale.
                </p>
            </div>

            <div class=" w-fit my-3">
                <h3 class="text-2xl my-2 text-green-500">Une pharmacie en ligne qui vous permet un large choix de
                    médicaments
                    pour toute la famille</h3>
                <i class="text-xl my-2">L’expertise d’une équipe de pharmaciens à votre service</i><br>
                <p>En vous rendant sur notre site, vous avez en effet accès à un choix large de produits de pharmacie en
                    stock,
                    avec plus de 15 000 références disponibles des marques les plus connues et plus recherchées en
                    pharmacie. De
                    très nombreux médicaments sans ordonnance, en stock et en libre accès dits OTC (Over the Counter) sont
                    proposés à l’achat sur le site. Ainsi, acheter en ligne des médicaments pour soigner un rhume, une
                    rhinite,
                    un rhume des foins, soulager des maux de tête, maux de gorge, toux, symptômes ORL, poussée d’herpès
                    (bouton
                    de fièvre) ou traiter une mycose ou crise hémorroïdaire ne vous prendra que quelques clics.
                </p>
                <i class="text-xl my-2">Les médicaments de votre pharmacie disponibles en ligne</i><br>
                <p>Accessible où que vous soyez, LaSante.net référence de nombreux laboratoires tels que Pfizer, Bayer,
                    Sanofi,
                    Pierre Fabre, … pour vous proposer en stock tous les jours des médicaments de qualité, avec des procédés
                    de
                    fabrication pharmaceutiques contrôlés et une traçabilité des produits constante. Notre pharmacie en
                    ligne
                    s’engage depuis des années pour proposer une large sélection en stock de substituts nicotiniques pour
                    vous
                    offrir le choix d’un sevrage tabagique qui vous corresponde. Soucieux de vous proposer toujours plus de
                    choix en ligne, notre pharmacie met à votre disposition des dispositifs médicaux dont des autotests,
                    lecteurs de glycémie dans le cadre d’un diabète ou encore des tests de grossesse.
                </p>
            </div>
            <div class=" w-fit my-3">
                <h3 class="text-2xl my-2 text-green-500">Une pharmacie en ligne qui vous permet un large choix de
                    médicaments
                    pour toute la famille</h3>
                <i class="text-xl my-2">L’automédication en ligne</i><br>
                <p>En vous rendant sur notre site, vous avez en effet accès à un choix large de produits de pharmacie en
                    stock,
                    avec plus de 15 000 références disponibles des marques les plus connues et plus recherchées en
                    pharmacie. De
                    très nombreux médicaments sans ordonnance, en stock et en libre accès dits OTC (Over the Counter) sont
                    proposés à l’achat sur le site. Ainsi, acheter en ligne des médicaments pour soigner un rhume, une
                    rhinite,
                    un rhume des foins, soulager des maux de tête, maux de gorge, toux, symptômes ORL, poussée d’herpès
                    (bouton
                    de fièvre) ou traiter une mycose ou crise hémorroïdaire ne vous prendra que quelques clics.
                </p>
                <i class="text-xl my-2">Les médicaments de votre pharmacie disponibles en ligne</i><br>
                <p>Accessible où que vous soyez, LaSante.net référence de nombreux laboratoires tels que Pfizer, Bayer,
                    Sanofi,
                    Pierre Fabre, … pour vous proposer en stock tous les jours des médicaments de qualité, avec des procédés
                    de
                    fabrication pharmaceutiques contrôlés et une traçabilité des produits constante. Notre pharmacie en
                    ligne
                    s’engage depuis des années pour proposer une large sélection en stock de substituts nicotiniques pour
                    vous
                    offrir le choix d’un sevrage tabagique qui vous corresponde. Soucieux de vous proposer toujours plus de
                    choix en ligne, notre pharmacie met à votre disposition des dispositifs médicaux dont des autotests,
                    lecteurs de glycémie dans le cadre d’un diabète ou encore des tests de grossesse
                </p>
            </div>
            <div class=" w-fit my-3">
                <h3 class="text-2xl my-2 text-green-500">Les plus grandes marques de parapharmacie, matériel médical,
                    produits
                    vétérinaires en ligne</h3>
                <i class="text-xl my-2">Notre large choix de bas, chaussettes et collants de contention</i><br>
                <p>Notre pharmacie en ligne propose également un large choix de matériel médical : vous trouverez, en ligne
                    sur
                    notre site, un large choix de bas, chaussettes ou collants de contention pour soulager les jambes
                    lourdes
                    avec notamment les produits de la marque Sigvaris, spécialisée dans la prise en charge des troubles de
                    la
                    circulation veineuse. Différents soins de parapharmacie pourront compléter vos achats en ligne pour
                    retrouver des jambes légères. Une large gamme d’orthopédie avec de nombreuses orthèses est aussi
                    proposée
                    pour prévenir et soulager les douleurs articulaires ou douleurs musculaires liées à des pathologies
                    précises
                    ou en soutient d’une activité physique. Pour vous aider dans vos achats, des guides des tailles sont
                    renseignés dans les fiches des produits orthopédiques.
                </p>
            </div>
            <div class="w-fit my-3">
                <h3 class="text-2xl my-2 text-green-500">L’engagement de nos pharmaciens à vos côtés</h3>
                <i class="text-xl my-2">L’expertise de nos pharmaciens et leurs conseils</i><br>
                <p>Nous avons à cœur de satisfaire toutes les demandes adaptées à tous les âges. Les jeunes parents
                    trouveront
                    ainsi un large choix de laits infantiles et de produits de nutrition des bébés, biberons, lingettes,
                    sucettes ou tétines ou des soins pour soulager les petits maux du quotidien de bébé et effectuer les
                    premiers soins avec des antiseptiques, crèmes, anti moustiques ou pansements. La santé de votre bébé est
                    votre priorité, elle est aussi la nôtre. Notre pharma en ligne référence au meilleur prix un large choix
                    de
                    marques pour que vous trouviez le soin adapté à la peau votre bébé ou votre enfant : protection solaire
                    en
                    spray ou crème, soin pour les cheveux, soin pour la peau sèche de bébé, retrouvez vos produits préférés
                    au
                    meilleur prix pharma. Les personnes qui cherchent à perdre du poids se réjouiront de pouvoir acheter des
                    crèmes pour le corps raffermissantes, soins hydratants et produits anticellulite en gel ou gel
                    anti-vergetures et compléments alimentaires détox (comprimés, ampoules, sachets…) proposés dans notre
                    catégorie Minceur, les séniors des produits pour favoriser le sommeil, antirides et anti-ronflements.
                    Les
                    hommes trouveront une large offre de soins pour le visage, le rasage (crème, gel et mousse), des lotions
                    capillaires en traitement de la perte de cheveux en spray ou en comprimés (calvitie) et produits
                    spécifiquement formulés au meilleur prix. L’ensemble de l’équipe de la pharmacie est formé à la
                    micronutrition et compléments alimentaires.
                </p>
                <i class="text-xl my-2">Une sélection exigeante par nos pharmaciens pour des produits de qualité</i><br>
                <p>Nous avons ainsi sélectionné des laboratoires de qualité pour vous proposer un large choix de produits et
                    compléments alimentaires pharma pour fortifier vos défenses immunitaires, améliorer votre confort
                    urinaire
                    ou digestif, soulager des problèmes de jambes lourdes ou venir en soutien du sevrage tabagique que vous
                    entreprenez. De nombreux produits pharma et soins disponibles en pharmacie sont maintenant proposés pour
                    soulager les douleurs articulaires ou les troubles de la circulation veineuse, notre équipe se met à
                    votre
                    disposition pour vous guider et vous conseiller dans vos achats. LaSante.net, site internet français,
                    bénéficie d’un protocole de paiement sécurisé et d’un service de livraison suivie et rapide selon votre
                    choix à domicile, sur votre lieu de travail ou une livraison dans un point relais que vous aurez
                    déterminé.
                    Nous assurons un lien et une communication permanente avec les clients de notre pharmacie, par téléphone
                    ou
                    par mail pour des questions de Santé, de suivi de commande, de SAV ou pour toute question relative à
                    l’un de
                    nos produits ou l’utilisation des soins. Notre priorité, sécuriser vos commandes et vous conseiller
                    Confidentialité et sécurité des délivrances Nos pharmaciens contrôlent les commandes de médicaments en
                    ligne
                    et assurent une sécurité optimale dans l’usage qui sera fait de médicaments en vous renseignant des
                    posologies des médicaments et éventuelles interactions médicamenteuses ou effets indésirables des
                    médicaments qui pourraient survenir avec les éléments fournis dans le profil médical. Nous vous
                    garantissons
                    une sécurisation des données médicales que vous nous confiez et le respect du secret médical qui vous
                    est
                    dû. Notre équipe de pharmaciens diplômés partagent avec vous des conseils santé sur des maladies, des
                    médicaments, des soins, des pathologies diverses et de saison et vous tiennent informés des dernières
                    actualités médicales et pharmaceutiques. Ils vous renseignent également des dernières nouveautés et
                    soins
                    coup de cœur parapharmacie. Votre Santé, notre priorité Votre Santé exige un niveau d’excellence que
                    nous
                    mettons en œuvre jour après jour pour vous assurer une écoute et un service conforme à vos attentes. Les
                    plus grandes marques de médicaments et parapharmacie sur LaSante.net : <br>
                <p class="text-blue-800 dark:text-green-600 hover:opacity- cursor-pointer">Filorga - Doliprane - Nurofen - Bioderma - Boiron - La Roche Posay - Vichy -
                    Nicopass
                    - Efferalgan - Mustela - Weleda - Puressentiel - PiLeJe - Gallia - Elmex - Frontline - Humex - Hydralin
                    -
                    Oenobiol - Anaca 3 - Parodontax</p>
                </p>
            </div>
            <div class=" w-fit my-3">
                <i class="text-xl my-2">Les Tops Produits dans votre pharmacie en ligne :</i><br>
                <p>Notre pharmacie en ligne propose également un large choix de matériel médical : vous trouverez, en ligne
                    sur
                <p class="text-blue-800 dark:text-green-600 hover:opacity-80 cursor-pointer"> Gifrer Sérum Physiologique - Euphytose 120 comprimés - Novanuit Triple Action -
                    Oscillococcinum - Cotopads 8 x 10 - PiLeJe Lactibiane Référence - Préservision 180 capsules - Drill
                    pastilles sans sucre - Apaisyl Gel - Titanoréïne Crème - Microlax Adulte - Nutergia Ergyphilus -
                    Toplexil
                    Sirop - Movicol Citron - Bioderma Atoderm Gel Douche - René Furterer Forticea - Actifed Jour et Nuit -
                    ImodiumCaps - Sanoflore Aqua Magnifica - XLS Médical - Minoxidil Bailleul - solutions hydroalcooliques -
                    masques - La Rosée - Lazartigue - NHCO</p>
                </p>
            </div>
            <div class=" w-fit my-3">
                <h3 class="text-2xl my-2 text-red-400">Comment être sûr d’acheter mes médicaments auprès d’une pharmacie en
                    ligne ?</h3>
                <i class="text-xl my-2">Les risques liés à la contrefaçon des médicaments et aux sites obscurs</i><br>
                <p>Pendant longtemps, les autorités sanitaires ont rappelé qu’il était dangereux d’acheter des médicaments
                    en
                    ligne. Les médicaments contrefaits et le manque total de traçabilité des produits trouvés en ligne ne
                    sont
                    pas des chimères. Il existe, encore aujourd’hui, des sites (en français) obscurs qui délivrent des
                    médicaments (parfois soumis à une prescription médicale). LaSante.net est une pharmacie en lignée créée
                    en
                    2012 dès l’autorisation de vente en ligne de médicament pour une pharmacie française. Pionnière du
                    secteur,
                    nous affichons sur le site les seuls vrais moyens de rassurer nos clients qu’ils se trouvent bien sur le
                    prolongement digital d’une pharmacie d’officine physique. LaSante.net a reçu tous les agréments
                    nécessaires
                    à son activité.
                </p>
                <i class="text-xl my-2">Comment reconnaître une pharmacie en ligne autorisée à vendre des médicaments en
                    ligne
                    ?</i><br>
                <p>Pour acheter vos médicaments en toute confiance, il faut en effet s’assurer que vous trouvez bien le logo
                    et
                    le lien qui redirige vers le Conseil de l’Ordre des Pharmaciens. Ce site d’autorité référence bien le
                    site
                    LaSante.net comme autorisé à la vente en ligne de médicament. Le logo du Conseil de l’Ordre des
                    Pharmaciens
                    est vert avec le drapeau français. Vous trouverez également les coordonnées de la pharmacie d’officine
                    physique à laquelle est rattaché le site de vente en ligne LaSante.net : Pharmacie du marche B.
                </p>
            </div>
        </div>
    </div>
@endsection
