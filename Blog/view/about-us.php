<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Il mio blog personale</title>
</head>

<body>
<?php require 'modules/header.php'; ?>

    <div class="container">
        <div class="row mt-2">
            <h1>Chi sono</h1>
        </div>
        <div class="row my-4">
            <div class="col-3">
                <img class="img-fluid"
                    src="assets\yoda.jpg"
                    alt="Mia Foto">
            </div>
            <div class="col-9">
                <h3>Matteo Salvati</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas ut metus leo. Donec nec sem arcu.
                    Fusce facilisis porttitor felis ut efficitur.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas ut metus leo. Donec nec sem arcu.
                    Fusce facilisis porttitor felis ut efficitur.
                </p>
            </div>
        </div>
        <section>
            <h2>Lingue</h2>
            <div class="row col-6">
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Language</th>
                            <th scope="col">Writing</th>
                            <th scope="col">Speaking</th>
                            <th scope="col">Listening</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Italiano</th>
                            <td>C2</td>
                            <td>B1</td>
                            <td>C1</td>
                        </tr>
                        <tr>
                            <th scope="row">Inglese</th>
                            <td>B2</td>
                            <td>B2</td>
                            <td>C1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>