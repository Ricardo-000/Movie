    <?php
    const API_URL = "https://whenisthenextmcufilm.com/api";

    // Inicializar una nueva sesión cURL
    $ch = curl_init(API_URL);

    // Desactivar la verificación del certificado SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Indicar que queremos recibir el resultado de la petición y no mostrarlo en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la petición y guardar el resultado
    $result = curl_exec($ch);

    // una alternativa seria utilizar file_get_contents
    // $result = file_get_contents(APÍ_URL); // solo si quieres hacer un get de una API

    // Verificar si la petición fue exitosa
    if ($result !== false) {
        $data = json_decode($result, true);
        // var_dump($data);
    } else {
        echo "Error al obtener los datos. Detalles del error: " . curl_error($ch);
    }

    // Cerrar la sesión cURL
    curl_close($ch);
    ?>

    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La proxima pelicula de Marvel</title>
        <meta name="description" content="">
        <!-- Centered viewport --> 
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
    </head>

        <main>
            <!-- ver datos de la api -->
            <!-- <pre style="font-size: 10px; overflow: scroll; height: 250px;">
                <?= var_dump($data); ?>
            </pre> -->
            <section>
                <img src="<?= $data["poster_url"]; ?>" width="300"  alt="Poster de <?= $data["title"]; ?>"
                style="border-radius: 16px" />
            </section>

            <hgroup>
                <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
                <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
                <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
            </hgroup>

        </main>

        <style>
            :root {
                color-scheme: light dark;
            }

            body {
                display: grid;
                place-content: center;
            }

            section {
                display: flex;
                justify-content: center;
                text-align: center;
            }

            hgroup {
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
            }

            img {
                margin: 0 auto;
            }
        </style>