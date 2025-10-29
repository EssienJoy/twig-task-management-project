<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load Twig

// Set up Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

// Render hero.twig and pass dynamic data
echo $twig->render('hero.twig', [
    'title' => 'Simplify Ticket Tracking with Ease',
    'subtitle' => 'Manage customer issues, track progress, and resolve faster — all in one place',
    'login_url' => '/login',
    'signup_url' => '/signup',
]);
