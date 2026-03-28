<header id="mainNavbar"
  class="bg-transparent text-white fixed w-full z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- LOGO -->
    <a href="index.php" class="flex items-center gap-3">

        <img src="/site-book-jeef/assets/images/logo-book-jeef2.png"
            alt="BOOK JEEF"
            class="h-14 md:h-16 w-auto object-contain">
    </a>

    <!-- MENU DESKTOP -->
    <nav class="hidden md:flex items-center gap-8 text-sm">
      <a href="index.php" class="hover:text-orange-400">Accueil</a>
      <a href="about.php" class="hover:text-orange-400">La Coopérative</a>
      <a href="projects.php" class="hover:text-orange-400">Nos Projets</a>
      <a href="contact.php" class="hover:text-orange-400">Contact</a>
    </nav>

    <!-- CTA -->
    <a href="index.php#adhesion" 
       class="hidden md:inline-block bg-orange-500 px-5 py-2 rounded-lg font-semibold hover:bg-orange-600 transition">
       Adhérez
    </a>

    <!-- MENU MOBILE -->
    <button id="menuBtn" class="md:hidden text-2xl">
      ☰
    </button>

  </div>

  <!-- MENU MOBILE -->
  <div id="mobileMenu" class="hidden bg-[#0f172a] px-6 pb-4">
    <a href="index.php" class="block py-2 border-b border-gray-700">Accueil</a>
    <a href="about.php" class="block py-2 border-b border-gray-700">La Coopérative</a>
    <a href="projects.php" class="block py-2 border-b border-gray-700">Nos Projets</a>
    <a href="contact.php" class="block py-2 border-b border-gray-700">Contact</a>

    <a href="index.php#adhesion" 
       class="block mt-4 bg-orange-500 text-center py-2 rounded-lg">
       Adhérez
    </a>
  </div>
</header>