document.addEventListener("DOMContentLoaded", () => {

  function initNavbar() {
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    if (menuBtn && mobileMenu) {
      menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    }
  }

  function initContactForm() {
    const form = document.getElementById("contactForm");

    if (!form) return;

    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const formData = new FormData(form);

      const data = {
        nom: formData.get("nom"),
        email: formData.get("email"),
        message: formData.get("message")
      };

      try {
        const res = await fetch("/site-book-jeef/api/endpoints/contact.php", {
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
                ✅ Message envoyé
              </h3>
              <p>Nous vous répondrons rapidement.</p>
            </div>
          `;
        } else {
          alert(result.message);
        }

      } catch (err) {
        console.error(err);
        alert("Erreur serveur");
      }
    });
  }

  function initAdhesionForm() {
    const form = document.getElementById("adhesionForm");

    if (!form) return;

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

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
        } else {
        alert(result.message);
        }
    });
    }

  function handleNavbarScroll() {
    const navbar = document.getElementById("mainNavbar");

    if (!navbar) return;

    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("bg-[#0f172a]", "shadow-md");
      } else {
        navbar.classList.remove("bg-[#0f172a]", "shadow-md");
      }
    });
  }

  // 🔥 IMPORTANT : appeler les fonctions
  initNavbar();
  handleNavbarScroll();
  initAdhesionForm();
  initContactForm();

});