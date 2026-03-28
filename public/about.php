<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos - BOOK JEEF</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- CSS custom -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

  <?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="pt-32 pb-20 bg-[#0f172a] text-white text-center">
  <h1 class="text-4xl md:text-5xl font-bold mb-4">
    À propos de BOOK JEEF
  </h1>
  <p class="text-gray-300 max-w-2xl mx-auto mb-6">
    Une coopérative engagée pour faciliter l’accès au logement 
    sécurisé pour la diaspora sénégalaise.
  </p>

  <a href="index.php#adhesion"
     class="bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
     Rejoindre la coopérative
  </a>
</section>

<!-- STORY -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <div data-aos="fade-right">
      <img src="/site-book-jeef/assets/images/about.jpg"
           class="rounded-xl shadow-lg w-full h-full object-cover">
    </div>

    <div data-aos="fade-left">
      <h2 class="text-3xl font-bold mb-6">
        Une vision portée par la diaspora
      </h2>

      <p class="text-gray-600 mb-4">
        BOOK JEEF est née d’une volonté forte de structurer l’investissement immobilier 
        des Sénégalais de la diaspora, en offrant un cadre sécurisé, transparent et collectif.
      </p>

      <p class="text-gray-600">
        Notre approche repose sur la mutualisation des ressources et la confiance, 
        afin de garantir à chaque membre un accès équitable à la propriété.
      </p>
    </div>

  </div>
</section>

<!-- MISSION / VISION / VALEURS -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

    <div data-aos="fade-up"
         class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-3">Mission</h3>
      <p class="text-gray-500">
        Faciliter l’accès à la propriété pour la diaspora 
        à travers des projets sécurisés.
      </p>
    </div>

    <div data-aos="fade-up"
         class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-3">Vision</h3>
      <p class="text-gray-500">
        Construire des communautés modernes, durables et solidaires.
      </p>
    </div>

    <div data-aos="fade-up"
         class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-3">Valeurs</h3>
      <ul class="text-gray-500 space-y-1">
        <li>✔️ Transparence</li>
        <li>✔️ Solidarité</li>
        <li>✔️ Engagement</li>
      </ul>
    </div>

  </div>
</section>

<!-- CHIFFRES -->
<section class="py-20 bg-[#0f172a] text-white text-center">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

    <div>
      <h3 class="text-4xl font-bold">+500</h3>
      <p class="text-gray-300">Membres</p>
    </div>

    <div>
      <h3 class="text-4xl font-bold">+100</h3>
      <p class="text-gray-300">Parcelles</p>
    </div>

    <div>
      <h3 class="text-4xl font-bold">100%</h3>
      <p class="text-gray-300">Sécurisé</p>
    </div>

  </div>
</section>

<!-- ÉQUIPE (crédibilité 🔥) -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold mb-10">Notre équipe</h2>

    <div class="grid md:grid-cols-3 gap-8">

      <div class="text-center">
        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4"></div>
        <h3 class="font-semibold">Président</h3>
        <p class="text-gray-500 text-sm">Coordination générale</p>
      </div>

      <div class="text-center">
        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4"></div>
        <h3 class="font-semibold">Responsable projets</h3>
        <p class="text-gray-500 text-sm">Suivi immobilier</p>
      </div>

      <div class="text-center">
        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4"></div>
        <h3 class="font-semibold">Finances</h3>
        <p class="text-gray-500 text-sm">Gestion financière</p>
      </div>

    </div>

  </div>
</section>

<!-- CTA FINAL -->
<section class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white text-center">

  <h2 class="text-3xl font-bold mb-4">
    Rejoignez une coopérative structurée et fiable
  </h2>

  <p class="text-gray-300 mb-6">
    Faites partie d’un projet collectif sécurisé pour votre avenir immobilier.
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
</html>