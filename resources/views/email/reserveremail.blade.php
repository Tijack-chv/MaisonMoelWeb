<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation - MaisonMoël</title>
    <!-- Lien vers la feuille de style Bootstrap (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f7f7f7; padding-top: 50px;">
    <div class="container" style="max-width: 600px; background-color: #ffffff; border-radius: 10px; padding: 30px;">
        <div class="text-center mb-4">
           
            <h2 class="text-success">Confirmation de Réservation</h2>
        </div>
        <p>Bonjour <strong>{{ $personne->prenom }} {{ $personne->nom }}</strong>,</p>
        
        <p>Merci beaucoup d'avoir choisi <strong>MaisonMoël</strong> pour votre prochaine expérience culinaire ! Nous sommes ravis de vous accueillir.</p>

        <p>Voici les détails de votre réservation :</p>
        
        <ul>
            <li><strong>Date de la réservation :</strong> {{ $reservation->dateReservation }}</li>
            <li><strong>Numéro de réservation :</strong> #{{ $reservation->idReservation }}</li>
        </ul>

        <p>Nous avons hâte de vous recevoir et de vous offrir une expérience inoubliable à MaisonMoël.</p>

        <hr>

        <p style="text-align: center; font-size: 0.9rem;">Cordialement,</p>
        <p style="text-align: center; font-weight: bold; font-size: 1rem;">MaisonMoël</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
