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
