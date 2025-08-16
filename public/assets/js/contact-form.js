// Contact form AJAX submission
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"], button:not([type])') || form.querySelector('button');
    const originalBtnText = submitBtn ? submitBtn.innerHTML : '';

    // CSRF: desde meta tag (y preferencia input hidden en el submit)
    const metaToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    function showMessage(type, text) {
        let box = form.querySelector('.contact-form-alert');
        if (!box) {
            box = document.createElement('div');
            box.className = 'contact-form-alert mt-4 text-sm';
            form.appendChild(box);
        }
        const base = 'px-4 py-3 rounded-lg border';
        const styles = type === 'success'
            ? 'bg-green-900/40 border-green-700 text-green-300'
            : 'bg-red-900/40 border-red-700 text-red-300';
        box.className = `contact-form-alert mt-4 text-sm ${base} ${styles}`;
        box.textContent = text;
    }

    function validate() {
        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const message = form.message.value.trim();
        if (!name || !email) {
            showMessage('error', 'Por favor completa los campos obligatorios.');
            return false;
        }
        // Simple email regex
        if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
            showMessage('error', 'Ingresa un correo electrónico válido.');
            return false;
        }
        if (message.length < 5) {
            showMessage('error', 'El mensaje es muy corto.');
            return false;
        }
        return true;
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!validate()) return;

        // Preferir token del input hidden si existe
        const inputToken = form.querySelector('input[name="_token"]')?.value;
        const effectiveToken = inputToken || metaToken;

        const formDataObj = {
            name: form.name.value.trim(),
            email: form.email.value.trim(),
            message: form.message.value.trim(),
            _token: effectiveToken
        };

        // Usar FormData para imitar un submit tradicional (mejor compatibilidad CSRF)
        const fd = new FormData();
        Object.entries(formDataObj).forEach(([k,v]) => fd.append(k, v));

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="animate-pulse">Enviando...</span>';
        }

        try {
            const response = await fetch('/contact-form', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': effectiveToken || ''
                },
                body: fd,
                credentials: 'same-origin'
            });

            if (response.status === 419) {
                showMessage('error', 'CSRF inválido (419). Refresca la página e inténtalo de nuevo.');
                return;
            }

            let data;
            const contentType = response.headers.get('content-type') || '';
            if (contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                try { data = JSON.parse(text); } catch { data = { message: text }; }
            }

            if (!response.ok) {
                const msg = data?.message || 'Error al enviar el mensaje.';
                showMessage('error', msg);
                return;
            }

            showMessage('success', data.message || 'Mensaje enviado correctamente. Te responderé pronto.');
            form.reset();
        } catch (error) {
            console.log(error);
            if (error.response) {
                if (error.response.status === 422) {
                    const errs = error.response.data.errors || {};
                    const first = Object.values(errs)[0];
                    showMessage('error', Array.isArray(first) ? first[0] : 'Revisa los campos e inténtalo de nuevo.');
                } else {
                    showMessage('error', error.response.data.message || 'Ocurrió un error al enviar el mensaje.');
                }
            } else {
                showMessage('error', 'No hay conexión o error inesperado.');
            }
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        }
    });
});
