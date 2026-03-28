<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détail Projet - BOOK JEEF</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/site-book-jeef/assets/css/style.css">
</head>

<body class="bg-gray-50 text-gray-800">

  <?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="pt-32 pb-20 bg-[#0f172a] text-white text-center">
  <h1 class="text-4xl md:text-5xl font-bold mb-4">
    Village Diaspora
  </h1>
  <p class="text-gray-300">Projet immobilier moderne à Kaolack</p>
</section>

<!-- DESCRIPTION -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6">

    <h2 class="text-2xl font-bold mb-6">Présentation du projet</h2>

    <p class="text-gray-600 mb-4">
      Le projet Village Diaspora vise à offrir des logements modernes et accessibles 
      aux membres de la diaspora sénégalaise.
    </p>

    <p class="text-gray-600">
      Situé dans une zone stratégique, il garantit sécurité, accessibilité et qualité de vie.
    </p>

  </div>
</section>

<!-- CARACTÉRISTIQUES -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

    <div class="bg-white p-6 rounded-xl shadow-sm">
      <h3 class="font-semibold">Localisation</h3>
      <p class="text-gray-500">Kaolack</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm">
      <h3 class="font-semibold">Type</h3>
      <p class="text-gray-500">Résidentiel</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm">
      <h3 class="font-semibold">Statut</h3>
      <p class="text-gray-500">En cours</p>
    </div>

  </div>
</section>

<!-- GALERIE -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">

    <img src="/site-book-jeef/assets/images/projet1.jpg" class="rounded-lg object-cover">
    <img src="/site-book-jeef/assets/images/projet2.jpg" class="rounded-lg object-cover">
    <img src="/site-book-jeef/assets/images/projet3.jpg" class="rounded-lg object-cover">

  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white text-center">

  <h2 class="text-3xl font-bold mb-4">
    Intéressé par ce projet ?
  </h2>

  <p class="text-gray-300 mb-6">
    Rejoignez la coopérative et accédez à ce type d’opportunité.
  </p>

  <a href="index.php#adhesion"
     class="bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
     Adhérer maintenant
  </a>

</section>

  <?php include 'components/footer.php'; ?>

<script src="/site-book-jeef/assets/js/main.js"></script>

</body>
</html>