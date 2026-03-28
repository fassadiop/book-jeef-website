<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - BOOK JEEF</title>

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
  <h1 class="text-4xl md:text-5xl font-bold mb-4">
    Contactez-nous
  </h1>
  <p class="text-gray-300 max-w-xl mx-auto mb-6">
    Une question ? Un projet ? Notre équipe vous accompagne à chaque étape.
  </p>

  <a href="index.php#adhesion"
     class="bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
     Rejoindre la coopérative
  </a>
</section>

<!-- CONTACT -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

    <!-- INFOS -->
    <div data-aos="fade-right" class="space-y-8">

      <h2 class="text-3xl font-bold">Nos coordonnées</h2>

      <!-- WHATSAPP -->
    <div class="flex items-start gap-4">

    <div class="bg-green-100 text-green-600 p-3 rounded-lg">
        💬
    </div>

    <div>
        <h3 class="font-semibold">WhatsApp</h3>

        <a href="https://wa.me/221771234567?text=Bonjour%20je%20souhaite%20des%20informations%20sur%20BOOK%20JEEF"
        target="_blank"
        class="text-gray-600 hover:text-green-600 transition">
        +221 77 123 45 67
        </a>

    </div>

    </div>

      <!-- EMAIL -->
      <div class="flex items-start gap-4">
        <div class="bg-orange-100 text-orange-500 p-3 rounded-lg">📧</div>
        <div>
          <h3 class="font-semibold">Email</h3>
          <p class="text-gray-600">bookjeefcoop@gmail.com</p>
        </div>
      </div>

      <!-- ADRESSE -->
      <div class="flex items-start gap-4">
        <div class="bg-orange-100 text-orange-500 p-3 rounded-lg">📍</div>
        <div>
          <h3 class="font-semibold">Adresse</h3>
          <p class="text-gray-600">Kaolack / Italie (Diaspora)</p>
        </div>
      </div>

      <!-- HORAIRES -->
      <div class="flex items-start gap-4">
        <div class="bg-orange-100 text-orange-500 p-3 rounded-lg">🕒</div>
        <div>
          <h3 class="font-semibold">Disponibilité</h3>
          <p class="text-gray-600">Lun - Sam : 09h - 18h</p>
        </div>
      </div>

    </div>

    <!-- FORMULAIRE -->
    <div data-aos="fade-left"
         class="bg-gray-50 p-8 rounded-xl shadow-md">

      <h3 class="text-xl font-semibold mb-6">
        Envoyez-nous un message
      </h3>

      <form id="contactForm" class="space-y-4">

        <input name="nom" type="text" placeholder="Nom complet"
          class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" required>

        <input name="email" type="email" placeholder="Email"
          class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" required>

        <input name="sujet" type="text" placeholder="Sujet"
          class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">

        <textarea name="message" placeholder="Votre message"
          rows="5"
          class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400"></textarea>

        <button type="submit"
          class="w-full bg-[#0f172a] text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition shadow">
          Envoyer le message
        </button>

      </form>

    </div>

  </div>
</section>

<!-- MAP (OPTIONNEL MAIS PREMIUM) -->
<section class="py-20 bg-gray-50 text-center">
  <h2 class="text-3xl font-bold mb-6">Notre localisation</h2>

  <div class="max-w-5xl mx-auto px-6">
    <div class="h-80 bg-gray-200 rounded-xl flex items-center justify-center">
      <span class="text-gray-500">Carte Google Maps (à intégrer)</span>
    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section class="py-20 bg-gradient-to-r from-[#0f172a] to-[#1e293b] text-white text-center">

  <h2 class="text-3xl font-bold mb-4">
    Prêt à rejoindre BOOK JEEF ?
  </h2>

  <p class="text-gray-300 mb-6">
    Commencez votre projet immobilier dès aujourd’hui.
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
<script>
    document.getElementById("contactForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    const data = {
    nom: formData.get("nom"),
    email: formData.get("email"),
    sujet: formData.get("sujet"),
    message: formData.get("message")
    };

    const res = await fetch("/site-book-jeef/api/endpoints/contact.php", {
        method: "POST",
        headers: {
        "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    });

    const result = await res.json();

    if (result.status === "success") {
        alert("Message envoyé !");
        form.reset();
    } else {
        alert(result.message);
    }
    });
</script>

</body>