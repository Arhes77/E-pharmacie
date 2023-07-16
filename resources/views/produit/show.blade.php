@extends('layouts.index')
@section('main')
    <div class="flex flex-col lg:mt-7 md:mt-4 font-serif ">
        <div class="rounded-md m-4 bg-green-600">
            <h1 class="rounded-sm text-center font-bold text-white">Liste des produits par catégories</h1>
        </div>
        <div class="flex flex-row  flex-wrap m-3 w-full">
            <div class="lg:w-2/3 md:w-1/2 px-1 border-r-2">
                <p class="w-fit text-justify">
                    Bienvenue sur Epharm@237, votre destination en ligne pour l'achat de médicaments et d'accessoires
                    parapharmaceutiques. Nous sommes ravis de vous offrir une expérience pratique et sécurisée pour tous vos
                    besoins en matière de santé et de bien-être. Chez Epharm@237, nous comprenons que votre santé est votre priorité absolue, c'est pourquoi nous nous
                    efforçons de vous fournir des produits de la plus haute qualité. Tous nos médicaments sont soigneusement
                    sélectionnés auprès de fabricants réputés et sont soumis à des contrôles stricts pour garantir leur
                    efficacité et leur sécurité. <br>
                    En plus de notre large gamme de médicaments, nous proposons également une sélection d'accessoires
                    parapharmaceutiques pour répondre à vos besoins quotidiens de santé et de beauté. Que vous recherchiez
                    des produits de soins de la peau, des vitamines et des suppléments, ou des articles de premiers soins,
                    nous avons tout ce dont vous avez besoin, directement livré à votre porte.Nous comprenons également l'importance de la confidentialité lorsqu'il s'agit de vos informations
                    personnelles et de vos commandes. Soyez assuré que toutes vos données sont traitées de manière sécurisée
                    et confidentielle. Notre plateforme de paiement est sécurisée, et nous ne partagerons jamais vos
                    informations avec des tiers sans votre consentement. <br>
                    Notre équipe dévouée est là pour vous aider à chaque étape de votre parcours. Que vous ayez des
                    questions sur nos produits, besoin de conseils sur la posologie ou d'assistance pour passer une
                    commande, nhésitez pas à nous contacter. Nous sommes là pour vous fournir un service clientèle
                    exceptionnel et répondre à toutes vos préoccupations. <br>
                    Nous vous remercions de votre confiance en Epharm@237. Nous nous engageons à vous offrir une expérience
                    d'achat en ligne fluide, fiable et sécurisée. Parce que votre santé et votre bien-être sont notre
                    priorité.                    
                </p>
            </div>
            <div class="w-fit lg:ml-6 ml-3">
                <ul class="list-disc list-outside">
                    @forelse ($cat as $ca)
                        <li class="hover:text-blue-700 hover:opacity-70"> <a href="{{ route('categorie.show', [$ca->id]) }}">
                                {{ $ca->nom_cat }}</a> </li>
                    @empty
                        <h4 class="w-fit my-3 self-center text-red-600 text-xl">Acune Catégories pour le moment!!!</h4>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="pt-3"><livewire:flash-message/></div>
        <div class="flex flex-wrap lg:ml-12 md:ml-0.5 my-4 flex-col">
            
            @forelse ($cat as $p)
                <h4 class="font-bold w-fit my-3 self-center text-2xl">{{ $p->nom_cat }}</h4>
                <livewire:produit-component :p="$p" :bools="1" />
                
            @empty
                <h4 class="w-fit my-3 self-center text-red-600 text-xl">Acune Catégories pour le moment!!!</h4>
            @endforelse
        </div>
    </div>
@endsection
