@extends('layouts.index')
@section('main')
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Propos</title>


        <link  rel="stylesheet" href="styles/header.css">
        <link  rel="stylesheet" href="/styles/apropos.css">
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>

        <section id="about" >
            <div class="container-a">
                <div class="left">
                    <h3>A <span>propos</span></h3>
                    <p>E-copharma est une parapharmacie et une pharmacie en ligne qui vous permet de commander des médicaments sans ordonnance à livrer directement chez vous. Mais quelles sont les raisons pour lesquelles vous pouvez faire appel à la pharmacie en ligne ? Dans la plupart des cas, cela peut provenir du fait que vous n'avez pas la possibilité d'aller acheter vos médicaments à la pharmacie la plus proche. Dans ce cas, il vous suffit de vous rendre sur le site internet d'Illicopharma pour commander vos médicaments.</p>
                </div>
                <div class="right">
                    <div class="icon">
                        <a href="#" ><i class='bx bxs-car-wash'></i></a>
                        <H4> Livraison sous 24/48h</H4>
                        <!-- <p>blbal 1</p> -->
                    </div>
                    <div class="icon">
                        <a href="#" ><i class='bx bxs-lock'></i></a>
                        <H4>100% Securisé</H4>
                        <!-- <p>blbal 2</p> -->
                    </div>
                    <div class="icon">
                        <a href="#" ><i class='bx bxs-capsule'></i></a>
                        <H4>+1000 Medocs</H4>
                        <!-- <p>blbal 3</p> -->
                    </div>
                    <div class="icon">
                        <a href="#" ><i class='bx bx-like' ></i></a>
                        <H4>300 Marques de qualité</H4>
                        <!-- <p>blbal 3</p> -->
                    </div>
                </div>
                <div class="left">
                    <h3>On Ne Sait Jamais</h3>
                    <p>Les données  recueillies sur nos pages Web de notre pharmacie en ligne sont utilisées uniquement pour le bon déroulement des commandes ou le traitement de vos demandes. Vos données ne sont ni vendues, ni louées, ni mises à la disposition de tiers de toute autre manière. La transmission de données personnelles à des institutions et administrations d'État est effectuée uniquement dans le cadre de législations nationales obligatoires. L'ensemble du personnel de notre pharmacie est également tenu au secret professionnel.</p>
                    <!-- <p>blabla 2</p> -->
                </div>
            </div>


            <div class="contact">
                <div class="content-c">
                    <h2>Contactez-Nous</h2>

                </div>
                <div class="container-c">
                    <div class="contactInfo">
                        <div class="box">
                            <div class="icon"><i class='bx bx-location-plus' ></i></div>
                            <div class="text">
                                <h3>Adress</h3>
                                <p>Dschang Cameroun</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class='bx bx-phone-call' ></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+237 678 72 56 64 / 655 23 51 34</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class='bx bx-envelope'></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>epharma@camer.net</p>
                            </div>
                        </div>
                        </div>
                        <div class="contactForm">
                            <form>
                                <h2>Send resquest</h2>
                                <div class="inputBox">
                                    <input type="text" name="nom" required >
                                    <span>Full Name</span>
                                </div>
                                <div class="inputBox">
                                    <input type="email" name="email" required >
                                    <span>Email</span>
                                </div>
                                <div class="inputBox">
                                    <textarea required></textarea>
                                    <span>Type your message...</span>
                                </div>
                                <div class="inputBox">
                                    <input type="submit" name="send" value="Send" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>


</html>

@endsection
