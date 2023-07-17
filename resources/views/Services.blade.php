@extends('layouts.index')
@section('main')
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>

        <!-- <link  rel="stylesheet" href="styles/index.css"> -->
        <link  rel="stylesheet" href="/styles/services.css">

    </head>
    <body>
       <section class="content">
        <h1>E-PHARMACIE,<br>
            VOUS AUSSI, PRENEZ LE VIRAGE DU NUMÉRIQUE POUR DÉVELOPPER VOTRE ACTIVITÉ</h1>
        <p>
            La vente en ligne et le click-&-collect se développent.
            Les pharmaciens ont des missions étendues en termes de services
            rendus à la population et la digitalisation des pharmacies s’est
             accélérée avec la crise sanitaire.
        </p>
        <button>En Savoir Plus</button>
       </section>

       <h1 class="titre">Nos Enjeux</h1>
       <section class="section_enjeux">
        <div class="enjeux">
            <div class="zone">
                <div class="num">1</div>
                <div class="desc"><b>Proposer de nouveaux services comme le click</b> &
                    collect et le scan d’ordonnance via votre site web.
                </div>
            </div>
            <div class="zone">
                <div class="num">2</div>
                <div class="desc"><b>Développer le e-commerce</b>
                    pour la vente de médicaments sans ordonnance 7 jours sur 7 et 24 h sur 24.
                </div>
            </div>
        </div>
        <div class="enjeux">
            <div class="zone">
                <div class="num">3</div>
                <div class="desc"><b>Mettre en place un service de téléconsultation</b>
                    afin de permettre à vos clients de réaliser des consultations à distance auprès de professionnels de santé.
                </div>
            </div>
            <div class="zone">
                <div class="num">4</div>
                <div class="desc"><b>Proposer des rendez-vous en ligne</b>
                    pour la vaccination ou les tests rapides d’orientation diagnostique; qui se synchronisent avec votre agenda et votre LGO.
                </div>
            </div>
        </div>
       </section>
    </body>

</html>

@endsection

