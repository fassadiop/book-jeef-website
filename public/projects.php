<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos projets - BOOK JEEF</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- CSS custom -->
  <link rel="stylesheet" href="/site-book-jeef/assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

  <?php include 'components/navbar.php'; ?>

  <!-- HERO -->
<section class="pt-32 pb-20 bg-[#0f172a] text-white text-center">
  <h1 class="text-4xl md:text-5xl font-bold mb-4">Nos Projets Immobiliers</h1>
  <p class="text-gray-300 max-w-2xl mx-auto mb-6">
    Découvrez des opportunités d’investissement sécurisées et adaptées à la diaspora.
  </p>

  <a href="index.php#adhesion"
     class="inline-block bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
     Rejoindre la coopérative
  </a>
</section>

<!-- FILTRES (UX PRO) -->
<section class="py-10 bg-white">
  <div class="max-w-7xl mx-auto px-6 flex flex-wrap gap-4 justify-center">

    <button class="px-4 py-2 bg-orange-500 text-white rounded-lg">Tous</button>
    <button class="px-4 py-2 bg-gray-100 rounded-lg">Terrains</button>
    <button class="px-4 py-2 bg-gray-100 rounded-lg">Résidences</button>
    <button class="px-4 py-2 bg-gray-100 rounded-lg">En cours</button>

  </div>
</section>

<!-- PROJETS -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

    <!-- CARD -->
    <div data-aos="zoom-in"
         class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:scale-105 transition duration-300">

      <img src="/site-book-jeef/assets/images/projet3.jpg"
           class="w-full h-52 object-cover">

      <div class="p-5">
        <span class="text-xs bg-orange-100 text-orange-600 px-2 py-1 rounded">
          En cours
        </span>

        <h3 class="font-semibold text-lg mt-3">Village Diaspora</h3>

        <p class="text-gray-500 text-sm mt-2">
          Projet résidentiel moderne à Kaolack avec équipements complets.
        </p>

        <div class="mt-4 flex justify-between items-center">
          <span class="text-sm text-gray-400">Kaolack</span>
            <a href="project-detail.php" class="text-orange-500 font-semibold">
                Voir +
            </a>
        </div>
      </div>
    </div>

    <!-- CARD -->
    <div data-aos="zoom-in"
         class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:scale-105 transition duration-300">

      <img src="/site-book-jeef/assets/images/projet1.jpg"
           class="w-full h-52 object-cover">

      <div class="p-5">
        <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">
          Disponible
        </span>

        <h3 class="font-semibold text-lg mt-3">Résidence Moderne</h3>

        <p class="text-gray-500 text-sm mt-2">
          Logements haut standing sécurisés avec accès facilité.
        </p>

        <div class="mt-4 flex justify-between items-center">
          <span class="text-sm text-gray-400">Dakar</span>
          <a href="project-detail.php" class="text-orange-500 font-semibold">
            Voir +
          </a>
        </div>
      </div>
    </div>

    <!-- CARD -->
    <div data-aos="zoom-in"
         class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:scale-105 transition duration-300">

      <img src="/site-book-jeef/assets/images/projet2.jpg"
           class="w-full h-52 object-cover">

      <div class="p-5">
        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">
          Terrains
        </span>

        <h3 class="font-semibold text-lg mt-3">Parcelles Viabilisées</h3>

        <p class="text-gray-500 text-sm mt-2">
          Terrains prêts à construire avec accès route et électricité.
        </p>

        <div class="mt-4 flex justify-between items-center">
          <span class="text-sm text-gray-400">Thiès</span>
            <a href="project-detail.php" class="text-orange-500 font-semibold">
                Voir +
            </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CTA FINAL -->
<section class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white text-center">

  <h2 class="text-3xl font-bold mb-4">
    Prêt à investir dans votre avenir ?
  </h2>

  <p class="text-gray-300 mb-6">
    Rejoignez BOOK JEEF et sécurisez votre projet immobilier dès aujourd’hui.
  </p>

  <a href="index.php#adhesion"
     class="bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
     Adhérer maintenant
  </a>

</section>

  <?php include 'components/footer.php'; ?>

  <script src="/site-book-jeef/assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
</body>