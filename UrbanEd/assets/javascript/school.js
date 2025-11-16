document.addEventListener("DOMContentLoaded", function() {
const articles = document.querySelectorAll(".article-schools");

    articles.forEach(article => {
        const title = article.querySelector(".art-title");
        const schoolsSection = article.querySelector(".schools");

        if (title && schoolsSection) {
            title.addEventListener("click", function() {
                schoolsSection.classList.toggle("hidden");
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const schools = document.querySelectorAll(".school");

  schools.forEach((school) => {
    const backArrow = school.querySelector(".back-arrow");

    school.addEventListener("click", function (e) {
      if (e.target.classList.contains("back-arrow")) return;

      schools.forEach((s) => {
        s.classList.remove("active");   
        s.style.display = "none";    
      });

      school.style.display = "block";
      school.classList.add("active");
    });

    
    backArrow.addEventListener("click", function (e) {
      e.stopPropagation(); 
      school.classList.remove("active");

      schools.forEach((s) => {
        s.style.display = "block";
      });
    });
  });
});