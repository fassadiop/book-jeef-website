<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOK JEEF - Coopérative d'habitat</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- CSS custom -->
  <link rel="stylesheet" href="/site-book-jeef/assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

  <?php include 'components/navbar.php'; ?>

  <!-- HERO -->
  <section id="hero" class="relative h-screen flex items-center">

  <!-- IMAGE -->
  <div class="absolute inset-0">
    <img src="/site-book-jeef/assets/images/hero.png"
         class="w-full h-full object-cover"
         alt="Villa moderne">
  </div>

  <!-- OVERLAY GRADIENT -->
  <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 text-white">

    <!-- BADGE -->
    <div class="mb-6">
      <span class="bg-orange-500/20 text-orange-400 px-4 py-2 rounded-full text-sm">
        Coopérative immobilière de la diaspora
      </span>
    </div>

    <!-- TITRE -->
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 max-w-3xl">
      Construisons Ensemble <br>
      <span class="text-orange-400">Votre Avenir Immobilier</span>
    </h1>

    <!-- DESCRIPTION -->
    <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-xl">
      Accédez à des projets immobiliers sécurisés au Sénégal, 
      conçus spécialement pour la diaspora.
    </p>

    <!-- CTA -->
    <div class="flex flex-col md:flex-row gap-4 mb-12">

      <a href="#adhesion"
         class="bg-orange-500 px-7 py-3 rounded-lg font-semibold hover:bg-orange-600 transition shadow-lg">
         Adhérez Maintenant
      </a>

      <a href="#projects"
         class="border border-white px-7 py-3 rounded-lg hover:bg-white hover:text-black transition">
         Voir les projets
      </a>

    </div>

    <!-- STATS (VERSION PREMIUM) -->
    <div class="grid grid-cols-3 gap-6 max-w-md">

      <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg text-center">
        <h3 class="text-2xl font-bold" data-count="500">0</h3>
        <p class="text-sm text-gray-300">Membres</p>
      </div>

      <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg text-center">
        <h3 class="text-2xl font-bold" data-count="100">0</h3>
        <p class="text-sm text-gray-300">Parcelles</p>
      </div>

      <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg text-center">
        <h3 class="text-2xl font-bold" data-count="100">0</h3>
        <p class="text-sm text-gray-300">Sécurisé</p>
      </div>

    </div>

  </div>

</section>

    <!-- ABOUT -->
    <section id="about" class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- IMAGE -->
        <div>
        <img src="/site-book-jeef/assets/images/about.jpg" 
            alt="Projet immobilier"
            class="rounded-xl shadow-lg">
        </div>

        <!-- TEXTE -->
        <div>

        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Qui Sommes-Nous ?
        </h2>

        <p class="text-lg text-gray-600 mb-6">
            Une coopérative d’habitat dédiée à la diaspora kaolackoise, 
            visant à faciliter l’accès à la propriété au Sénégal.
        </p>

        <!-- CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <div class="bg-gray-50 p-4 rounded-lg shadow-sm text-center">
            <h3 class="font-semibold">Accès au foncier</h3>
            <p class="text-sm text-gray-500">Terrains sécurisés</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg shadow-sm text-center">
            <h3 class="font-semibold">Construction</h3>
            <p class="text-sm text-gray-500">Logements modernes</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg shadow-sm text-center">
            <h3 class="font-semibold">Communauté</h3>
            <p class="text-sm text-gray-500">Solidarité diaspora</p>
            </div>

        </div>

        </div>

    </div>
    </section>


  <section id="projects" class="py-20 bg-gray-50">

  <div class="max-w-7xl mx-auto px-6">

    <!-- PROJETS -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Nos Projets Immobiliers
      </h2>
      <p class="text-gray-600">
        Découvrez nos réalisations et projets en cours
      </p>
    </div>

    <!-- CARDS -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- CARD -->
      <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm">
        <img src="/site-book-jeef/assets/images/projet3.jpg"
             class="w-full h-48 object-cover">

        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2">Village Diaspora</h3>
          <p class="text-gray-500 text-sm">
            Projet résidentiel moderne à Kaolack
          </p>
        </div>
      </div>

      <!-- CARD -->
      <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm">
        <img src="/site-book-jeef/assets/images/projet1.jpg"
             class="w-full h-48 object-cover">

        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2">Résidence Moderne</h3>
          <p class="text-gray-500 text-sm">
            Habitations haut standing sécurisées
          </p>
        </div>
      </div>

      <!-- CARD -->
      <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm">
        <img src="/site-book-jeef/assets/images/projet2.jpg"
             class="w-full h-48 object-cover">

        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2">Parcelles Viabilisées</h3>
          <p class="text-gray-500 text-sm">
            Terrains prêts à construire
          </p>
        </div>
      </div>

    </div>

  </div>

</section>

  <!-- AVANTAGES -->
  <section id="advantages" class="py-20 bg-white">

  <div class="max-w-7xl mx-auto px-6">

    <!-- TITRE -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Nos Avantages
      </h2>
      <p class="text-gray-600">
        Pourquoi rejoindre BOOK JEEF ?
      </p>
    </div>

    <!-- LISTE AVANTAGES -->
    <div class="grid md:grid-cols-2 gap-8">

      <!-- ITEM 1 -->
      <div class="flex items-center gap-4 bg-white p-6 rounded-xl shadow-sm">
        <div class="text-3xl">🏦</div>
        <div>
          <h3 class="font-semibold text-lg">Investissement sécurisé</h3>
          <p class="text-gray-500">Votre avenir en toute confiance</p>
        </div>
      </div>

      <!-- ITEM 2 -->
      <div class="flex items-center gap-4 bg-white p-6 rounded-xl shadow-sm">
        <div class="text-3xl">🤝</div>
        <div>
          <h3 class="font-semibold text-lg">Accompagnement financier</h3>
          <p class="text-gray-500">Facilités de paiement adaptées</p>
        </div>
      </div>

      <!-- ITEM 3 -->
      <div class="flex items-center gap-4 bg-white p-6 rounded-xl shadow-sm">
        <div class="text-3xl">🏡</div>
        <div>
          <h3 class="font-semibold text-lg">Logements modernes</h3>
          <p class="text-gray-500">Des habitations de qualité</p>
        </div>
      </div>

      <!-- ITEM 4 -->
      <div class="flex items-center gap-4 bg-white p-6 rounded-xl shadow-sm">
        <div class="text-3xl">🌍</div>
        <div>
          <h3 class="font-semibold text-lg">Communauté forte</h3>
          <p class="text-gray-500">Solidarité entre membres</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- CONFIANCE -->
<section class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white">

  <div class="max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Pourquoi nous faire confiance ?
    </h2>

    <p class="text-gray-300 max-w-2xl mx-auto mb-10">
      BOOK JEEF s’appuie sur une organisation structurée, 
      des partenaires solides et une vision claire du développement immobilier.
    </p>

    <div class="grid md:grid-cols-3 gap-8">

      <div>
        <h3 class="text-xl font-semibold mb-2">Transparence</h3>
        <p class="text-gray-400">Gestion claire et suivie</p>
      </div>

      <div>
        <h3 class="text-xl font-semibold mb-2">Sécurité</h3>
        <p class="text-gray-400">Cadre légal et structuré</p>
      </div>

      <div>
        <h3 class="text-xl font-semibold mb-2">Expérience</h3>
        <p class="text-gray-400">Une équipe engagée</p>
      </div>

    </div>

  </div>

</section>

  <!-- ADHESION -->
  <section id="adhesion" class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white">

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- TEXTE -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold mb-6">
        Rejoignez la coopérative
      </h2>

      <p class="text-gray-300 mb-6">
        Remplissez le formulaire pour soumettre votre demande d’adhésion 
        et accéder à votre futur logement en toute sécurité.
      </p>

      <ul class="space-y-3 text-gray-300">
        <li>✔️ Accès à des terrains sécurisés</li>
        <li>✔️ Accompagnement financier</li>
        <li>✔️ Projet immobilier structuré</li>
      </ul>
    </div>

    <!-- FORMULAIRE -->
    <div class="bg-white text-black p-8 rounded-xl shadow-lg">

      <h3 class="text-xl font-semibold mb-6">Formulaire d’adhésion</h3>

      <form id="adhesionForm" class="space-y-4">

        <input name="nom" type="text" placeholder="Nom complet"
            class="w-full p-3 border rounded-lg" required>

        <input name="email" type="email" placeholder="Email"
            class="w-full p-3 border rounded-lg" required>

        <input name="telephone" type="text" placeholder="Téléphone"
            class="w-full p-3 border rounded-lg">

        <input name="ville" type="text" placeholder="Ville"
            class="w-full p-3 border rounded-lg">

        <input name="pays" type="text" placeholder="Pays"
            class="w-full p-3 border rounded-lg">

        <textarea placeholder="Motivation"
          class="w-full p-3 border rounded-lg"></textarea>

        <button type="submit"
          class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
          Soumettre ma demande
        </button>

      </form>

    </div>

  </div>

</section>

  <!-- CONTACT -->
  <section id="contact" class="py-20 bg-gray-50">

  <div class="max-w-6xl mx-auto px-6">

    <!-- TITRE -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Contactez-nous
      </h2>
      <p class="text-gray-600">
        Une question ? Notre équipe est à votre écoute.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-10">

      <!-- INFOS -->
      <div class="space-y-6">

        <div class="flex items-start gap-4">
          <div class="bg-green-100 text-green-600 p-3 rounded-lg">💬</div>
          <div>
            <h3 class="font-semibold text-lg">WhatsApp</h3>
            <a href="https://wa.me/221771234567?text=Bonjour%20je%20souhaite%20des%20informations%20sur%20BOOK%20JEEF"
              target="_blank"
              class="text-gray-600 hover:text-green-600">
              +221 77 123 45 67
            </a>
          </div>
        </div>

        <div>
          <h3 class="font-semibold text-lg">Email</h3>
          <p class="text-gray-600">contact@bookjeef.com</p>
        </div>

        <div>
          <h3 class="font-semibold text-lg">Adresse</h3>
          <p class="text-gray-600">
            Kaolack / Italie (Diaspora)
          </p>
        </div>

      </div>

      <!-- FORMULAIRE -->
      <div class="bg-gray-50 p-6 rounded-xl shadow-sm">

        <form id="contactForm" class="space-y-4">

          <input name="nom" type="text" placeholder="Nom"
            class="w-full p-3 border rounded-lg" required>

          <input name="email" type="email" placeholder="Email"
            class="w-full p-3 border rounded-lg" required>

          <textarea name="message" placeholder="Votre message"
            class="w-full p-3 border rounded-lg"></textarea>

          <button type="submit"
            class="w-full bg-[#0f172a] text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition">
            Envoyer
          </button>

        </form>

      </div>

    </div>

  </div>

</section>

  <?php include 'components/footer.php'; ?>

  <!-- JS -->
  <script src="/site-book-jeef/assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<script>
document.getElementById("adhesionForm")?.addEventListener("submit", async (e) => {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  const data = {
    nom: formData.get("nom"),
    email: formData.get("email"),
    telephone: formData.get("telephone"),
    ville: formData.get("ville"),
    pays: formData.get("pays")
  };

  const res = await fetch("/site-book-jeef/api/endpoints/adhesion.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  });

  const result = await res.json();

  if (result.status === "success") {
    form.innerHTML = `
      <div class="text-center p-6">
        <h3 class="text-green-600 font-bold text-xl mb-2">
          ✅ Demande envoyée
        </h3>
        <p>Nous vous contacterons rapidement.</p>
      </div>
    `;
    form.reset();
  } else {
    alert(result.message);
  }
});
</script>

</body>
</html>