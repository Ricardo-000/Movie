    <!-- <h1>
    <?php
    echo "hola mundo";
    ?>
    </h1> -->

    <?php
    // variables
    $name = "Ricardo";
    $IsDev = true;
    $age = 61;
    // $isOld = $age > 40 ;

    // constantes globales
    define('LOGO_URL', 'https://pngimg.com/uploads/php/php_PNG26.png');

    // constantes
    // const NOMBRE = 'Ricardo';

    $output = "Hola $name, con una edad de $age";
    $outputAge = match (true) {
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolecente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age === 60 => "Eres un adulto viejo, $name",
        default => "Eres imbecil, $name xd",

    };

    $bestlanguajes = ["PHP", "Javascript", "Python", 1, 2];
    $bestlanguajes[3] = "Java";
    $bestlanguajes[] = "TypeScript";
    // echo "<p>El mejor lenguaje es: " . implode(", ", $bestlanguajes) . "</p>";

    $person = [
        "name" => "Ricardo",
        "age" => 80,
        "isDev" => true,
        "languages" => ["PHP", "Javascript", "Phyton"],
    ];
    $person["name"] = "prea";
    $person["languages"][] = "Java";
    ?>

        <!-- saco el indice con $key -->
        <ul>
        <?php foreach ($bestlanguajes as $key => $language) : ?>  
            <li><?= $key . " " . $language ?></li>
        <?php endforeach; ?>
        </ul>

    <!-- <h3>El mejor lenguaje es <?= $bestlanguajes[0] ?></h3> -->


    <h2><?= $outputAge ?></h2>

    <!-- if chido
    <?php if ($isOld) : ?>
        <h2>Eres viejo. Lo siento</h2>
    <?php elseif ($IsDev) : ?>
        <h2>No eres viejo pero eres Dev. Estás jodido</h2>
    <?php else : ?>
        <h2>Eres joven. Felicidades</h2>
    <?php endif; ?> -->



    <img src="<?= LOGO_URL ?>" alt="php logo" width="200">
    <h1>
    <?=
    $output;
    ?>
    </h1>


    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>