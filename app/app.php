<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Contact.php";

  session_start();
  if (empty($_SESSION['list_of_contacts'])) {
    $_SESSION['list_of_contacts'] = array();
  }
  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array ('twig.path' => __DIR__."/../views"));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('index.html.twig', array('contacts' => Contact::getAll()));
  });

  $app->post("/contacts", function() use ($app) {
    $newContact = new Contact ($_POST['phone'], $_POST['contact'],$_POST['address'], $_POST['email']);
    $newContacts->save();

    return $app['twig']->render('index.html.twig', array('contacts' => $_SESSION['list_of_contacts']));

  });

  $app->post("/delete_contacts", function() use ($app) {
    Contact::deleteAll();
    return $app['twig']->render('index.html.twig');
  });

  return $app;
?>
