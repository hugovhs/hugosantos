document.addEventListener('DOMContentLoaded', function () {
    const subscribeForm = document.getElementById('subscribe-form');
    const emailInput = document.getElementById('subscribe-email');
    const successMessage = document.getElementById('subscribe-success');
    const errorMessage = document.getElementById('subscribe-error');
    const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Spinner helpers
    const submitBtn = subscribeForm ? subscribeForm.querySelector('button[type="submit"], input[type="submit"]') : null;
    let originalBtnHTML = submitBtn ? submitBtn.innerHTML : null;

    // Show spinner
    function showSpinner() {
        if (!submitBtn) return;
        originalBtnHTML = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="inline-flex items-center gap-2"><span class="spinner-border animate-spin inline-block w-4 h-4 border-2 border-current border-r-transparent rounded-full align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status" aria-label="loading"></span><span>Enviando...</span></span>`;
    }

    // Hide spinner
    function hideSpinner() {
        if (!submitBtn) return;
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnHTML;
    }

    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const email = emailInput.value;
            showSpinner();

            fetch("/subscribe", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrf_token
                },
                body: JSON.stringify({ email: email })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    successMessage.textContent = data.message;
                    successMessage.classList.remove('hidden');
                    errorMessage.classList.add('hidden');
                } else if (data.errors && data.errors.email) {
                    errorMessage.textContent = data.errors.email[0];
                    errorMessage.classList.remove('hidden');
                    successMessage.classList.add('hidden');
                } else {
                    errorMessage.textContent = 'Error inesperado.';
                    errorMessage.classList.remove('hidden');
                    successMessage.classList.add('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorMessage.textContent = 'Ocurrió un error al enviar. Intenta de nuevo.';
                errorMessage.classList.remove('hidden');
                successMessage.classList.add('hidden');
            })
            .finally(() => {
                hideSpinner();
            });

            return false; // Prevent default form submission
        });
    }
});