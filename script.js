function sendEmail(event) {
    event.preventDefault();  // Impede o envio do formulário diretamente

    // Envia o formulário via fetch para o FormSubmit
    const form = document.getElementById('contactForm');
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            // Exibe a notificação de sucesso
            document.getElementById('notification').style.display = 'block';
            // Limpa o formulário
            form.reset();
        } else {
            alert('Ocorreu um erro ao enviar seu email. Tente novamente.');
        }
    })
    .catch(error => {
        alert('Erro de envio. Tente novamente.');
    });
}
