<?php
$pageTitle = "Contato";
include 'header.php';
include 'menu.php';
?>

<main class="content container">
    <section class="contact">
        <h2>Entre em Contato</h2>
        <p>Se você tem alguma dúvida ou deseja saber mais sobre nossos serviços, entre em contato conosco pelos canais abaixo ou preencha o formulário:</p>

        <div class="contact-info">
            <p><strong>Telefone:</strong> (47) 99711-5678</p>
            <p><strong>Email:</strong> contato@Renascer.com.br</p>
            <p><strong>Endereço:</strong> Rua Exemplo, 123, Centro, Cidade - SP</p>
        </div>

        <form class="contact-form" action="send-email.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>
</main>


