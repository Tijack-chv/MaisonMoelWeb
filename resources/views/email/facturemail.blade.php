<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture de Paiement - Dîner à MaisonMoël</title>
    <!-- Lien vers la feuille de style Bootstrap (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div class="container my-5">
        <div class="card">
            <div class="card-header text-center bg-success text-white">
                <h1>Facture de Paiement</h1>
                <p>Dîner à MaisonMoël</p>
            </div>
            <div class="card-body">
                <h3>Merci pour votre paiement, {{ $personne->nom }} {{ $personne->prenom }} !</h3>
                <p>Nous vous remercions pour votre visite et sommes heureux de vous avoir accueillis à MaisonMoël. Voici votre facture pour le dîner.</p>

                <div class="mb-4">
                    <h5><strong>Date du dîner :</strong> {{ $reservation->dateReservation }}</h5>
                    <h5><strong>Numéro de réservation :</strong> #{{ $reservation->idReservation }}</h5>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commande->comporters as $comporter)
                        <tr>
                            <td>{{ $comporter->plat->nomPlat }}</td>
                            <td>{{ $comporter->nbCommander }}</td>
                            <td>{{ $comporter->prix }} €</td>
                            @php
                                $total += $comporter->prix;
                            @endphp

                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end">
                    <h4><strong>Total à Payer : {{ number_format($total, 2, ',', ' ') }} €</strong></h4>
                </div>
            </div>
            <div class="card-footer text-center">
                <p>Cordialement,</p>
                <p><strong>MaisonMoël</strong></p>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
