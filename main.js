document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll("form");
    
    forms.forEach((form) => {
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            alert("Form submitted successfully. Redirecting to the main page.");
            window.location.href = "index.html";
        });
    });
});
