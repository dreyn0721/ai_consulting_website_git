document.querySelector("form").addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Thank you! We will contact you soon.");
});


const sageSection = document.querySelector(".vd-way");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      sageSection.classList.add("visible");
    }
  });
}, { threshold: 0.3 });

observer.observe(sageSection);


const accelerateSection = document.querySelector(".accelerate");

const accelerateObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      accelerateSection.classList.add("visible");
    }
  });
}, { threshold: 0.3 });

accelerateObserver.observe(accelerateSection);


const cards = document.querySelectorAll(".capability-card");

const cardObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = 1;
      entry.target.style.transform = "translateY(0)";
    }
  });
}, { threshold: 0.2 });

cards.forEach(card => {
  card.style.opacity = 0;
  card.style.transform = "translateY(20px)";
  card.style.transition = "all 0.6s ease";
  cardObserver.observe(card);
});

