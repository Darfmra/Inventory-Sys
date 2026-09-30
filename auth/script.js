function showForm(formId) {
    document.querySelectorAll(".container").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}