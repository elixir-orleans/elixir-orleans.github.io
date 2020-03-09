<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
      $to      = 'elixir-orleans@gmail.com';
      $subject = 'Contact - '.'Test'.' - '.'Nom';
      $message = 'Message';
      $headers = array(
        'From' => 'test@gmail.com',
        'Reply-To' => 'test@gmail.com',
       'X-Mailer' => 'PHP/' . phpversion()
      );

    $retour = mail($to, $subject, $message, $headers);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>