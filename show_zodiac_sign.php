<?php include('layouts/header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_nascimento = $_POST['data_nascimento'];

    if ($data_nascimento) {
        $data_formatada = date("d/m", strtotime($data_nascimento));
        $signos = simplexml_load_file("signos.xml");

        foreach ($signos->signo as $signo) {
            $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
            $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
            $dataUser = DateTime::createFromFormat('d/m', $data_formatada);

            if (($dataUser >= $dataInicio) && ($dataUser <= $dataFim)) {
                echo "<h2>Seu Signo: {$signo->signoNome}</h2>";
                echo "<p>{$signo->descricao}</p>";
                break;
            }
        }
    } else {
        echo "<p class='text-danger'>Por favor, insira uma data válida.</p>";
    }
}
?>

<a href="index.php" class="btn btn-secondary mt-3">Voltar</a>

</div> <!-- Fecha container do header -->
</body>
</html>
