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

  $app->post("/inputContact", function() use ($app) {
    $newContacts = new Contact ($_POST['phone'], $_POST['name'],$_POST['address'], $_POST['email'], $_POST['image']);
    $newContacts->save();
    return $app['twig']->render('contact.html.twig', array('contacts' => $newContacts));
  });

  $app->post("/delete_contacts", function() use ($app) {
    Contact::deleteAll();
    return $app['twig']->render('deleteContactPage.html.twig');
  });

  return $app;
?>
