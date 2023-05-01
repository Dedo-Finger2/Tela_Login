<!DOCTYPE html>
<html>

<head>
    <title>Meu formulário Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f2f2f2;
            overflow-x: hidden;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
        }

        .diagonal {
            position: absolute;
            top: 0;
            right: 0;
            width: 52%;
            height: 100%;
            transform: skewX(15deg);
            transform-origin: 0% 0%;
        }

        .imagem {
            background-image: url('https://picsum.photos/id/10/800/800');
            background-size: cover;
            filter: blur(2px);
        }

        .cor {
            background-color: rgba(9, 0, 0, 0.4);
            filter: blur(2px);
        }

        .modal {
            z-index: 999;
        }

        .modal-body {
            text-align: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="modal " id="meuModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Erro de login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Usuário inválido!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="diagonal imagem"></div>
    <div class="diagonal cor"></div>

    <div class="container-fluid">
        <!-- Inclua o código JavaScript do Bootstrap para permitir que o modal seja exibido -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <div class="row justify-content-start align-items-center" style="height:100vh">
            <div class="col-md-3 col-sm-6 offset-md-1 form-container">
                <h1 class="text-center">Login</h1>
                <form class="needs-validation" method="post" name="data" action="./controller/tratament.php" novalidate>
                    <div class="mb-3">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input name="username" type="text" class="form-control form-control-lg"
                                id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Um username é obrigatório!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input name="email" type="email" class="form-control form-control-lg"
                                id="validationCustom03" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Um email é obrigatório!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom05" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">#</span>
                            <input name="password" type="password" class="form-control form-control-lg"
                                id="validationCustom05" aria-describedby="inputGroupPrepend" minlength="6" required>
                            <div class="invalid-feedback">
                                Uma senha é obrigatória!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Aceito os termos que ninguém lê.
                            </label>
                            <div class="invalid-feedback">
                                Aceite os termos!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-2QbJFHJlRzZ1TnZGmfszm1L9X8QhWYcHmOEnoGn4Ig8t4WcHvNtXk4a1d9SZ8WQl"
        crossorigin="anonymous"></script>
    <!-- Inclua o jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Inclua o Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <?php

    if (isset($_GET['erro'])) {
        echo
            "<script>
                $('#meuModal').modal('show');
            </script>";
    }
    ?>
    <script>
        // Ativa a validação do Bootstrap no formulário
        (function () {
            'use strict'

            // Seleciona todos os formulários que precisam de validação
            var forms = document.querySelectorAll('.needs-validation')

            // Loop através dos formulários e adiciona um evento de submissão para cada um
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        // Verifica se o formulário é válido antes de enviar
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>