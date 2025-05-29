function showform(formId) {
    const forms = document.querySelectorAll('.form-box');
    forms.forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
}
