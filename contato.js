// Validação do formulário de contato
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const nome = document.getElementById("nome").value;
        const email = document.getElementById("email").value;
        const mensagem = document.getElementById("mensagem").value;

        if (!nome || !email || !mensagem) {
            alert("Por favor, preencha todos os campos do formulário.");
        } else {
            // Envie os dados do formulário para o servidor ou realize outras ações desejadas.
            // Você pode usar uma biblioteca como Axios para fazer uma requisição HTTP POST.
            // Exemplo:
            // axios.post("URL_DO_SERVIDOR", { nome, email, mensagem })
            //     .then(response => {
            //         // Ação após o envio bem-sucedido
            //     })
            //     .catch(error => {
            //         // Tratamento de erros, se necessário
            //     });
        }
    });
});
