<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <head>
        <nav>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="<?= base_url('/login') ?>">Login</a></li>
            </ul>
        </nav>
    </head>

    <body>
        <h1>Bem-vindo à página inicial</h1>
        <p>Esta é a página inicial do nosso site.</p>
    </body>
    
    <footer>
        <p>© 2026 - Dumbox.</p>
    </footer>
</body>
</html>