<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
      $to      = 'elixir-orleans@gmail.com';
      $subject = 'Contact - '.$_POST['subject'].' - '.$_POST['name'];
      $message = $_POST['message'];
      $headers = array(
        'From' => $_POST['email'],
        'Reply-To' => $_POST['email'],
       'X-Mailer' => 'PHP/' . phpversion()
      );

    $retour = mail($to, $subject, $message, $headers);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>