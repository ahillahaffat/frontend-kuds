function toggleHoverEffect(card) {
        card.classList.toggle("hover-effect");
      }
      
      const cards = document.querySelectorAll(".card");
      cards.forEach(function(card) {
        card.addEventListener("click", function() {
          toggleHoverEffect(card);
        });
      });