<!DOCTYPE html>
<html>

<head>
    <title>Reservation</title>
</head>

<body>
    <h1>Confirmation de réservation</h1>
    <p>Cher {{ $personne->nom }},</p>
    <p>Merci de votre réservation a MaisonMoel. Nous sommes ravis de vous avoir parmi nous !</p>
    <p>Votre date de réservation est : {{$reservation->dateReservation}}</p>
    <p>Cordialement,</p>
    <p>MaisonMoël</p>
</body>

</html>
 