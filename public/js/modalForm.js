document.addEventListener('DOMContentLoaded', () => {

    /* ================= MODALS ================= */
    const modal = document.getElementById('modal_box');
    const successModal = document.getElementById('success_modal');
    const openButtons = document.querySelectorAll('.open-modal');

    function openModal(target) {
        target.classList.add('activeMy');
        document.body.classList.add('modal-open');
    }

    function closeModal(target) {
        target.classList.remove('activeMy');
        document.body.classList.remove('modal-open');
    }

    function bindModal(modalEl) {
        if (!modalEl) return;
        modalEl.querySelector('.modal-overlay')?.addEventListener('click', () => closeModal(modalEl));
        modalEl.querySelector('.modal-close')?.addEventListener('click', () => closeModal(modalEl));
    }

    bindModal(modal);
    bindModal(successModal);

    // Открытие модалки
    openButtons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            openModal(modal);

            // Обновляем hidden поля перед открытием модалки
            const subjectField = document.querySelector('#contact-form input[name="subject"]');
            const pageField = document.querySelector('#contact-form input[name="page"]');

            if (subjectField) {
                const subject = btn.dataset.subject || 'Callback request';
                const page = window.location.href;
                subjectField.value = `${subject} | ${page}`;
            }

            if (pageField) {
                pageField.value = window.location.href;
            }
        });
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeModal(modal);
            closeModal(successModal);
        }
    });

    /* ================= FORM AJAX ================= */
    const form = document.getElementById('contact-form');
    if (!form) return;



    form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation(); // блокирует все остальные обработчики submit

        // Проверяем hidden поля перед отправкой
        const subjectField = form.querySelector('input[name="subject"]');
        if (!subjectField || !subjectField.value) {
            subjectField.value = 'Callback request | ' + window.location.href;
        }

        const pageField = form.querySelector('input[name="page"]');
        if (pageField) pageField.value = window.location.href;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            },
            body: new FormData(form)
        })
            .then(response => {
                if (!response.ok) throw new Error('Error');
                return response.json();
            })
            .then(() => {
                form.reset();
                closeModal(modal);
                openModal(successModal);
            })
            .catch(() => {
                closeModal(modal);
                openModal(successModal);
            });
    });

});
