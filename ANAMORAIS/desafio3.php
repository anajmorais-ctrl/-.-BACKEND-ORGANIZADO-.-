<?php
    if (isset($_POST['calcular'])) {
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Cálculo do IMC
        $imc = $peso / ($altura * $altura);

        // Define a classificação
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            $classificacao = "Peso normal";
        } else if ($imc >= 25 && $imc <= 29.9) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        echo "<div class='resultado'>";
        echo "<p>👤 <strong>Paciente:</strong> " . $nome . "</p>";
        echo "<p>⚖️ <strong>Peso:</strong> " . $peso . " kg</p>";
        echo "<p>📏 <strong>Altura:</strong> " . $altura . " m</p>";
        echo "<p>📊 <strong>IMC:</strong> " . number_format($imc, 2, ',', '.') . "</p>";
        echo "<p>ℹ️ <strong>Classificação:</strong> " . $classificacao . "</p>";
        echo "<hr>";
        echo "<p>💡 <em>O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.</em></p>";
        echo "</div>";
    }
    ?>

    <hr>

    <div style="text-align: center;">
        <h3>Quer cuidar melhor da sua saúde?</h3>
        <p>Agende uma consulta com nossa nutricionista!</p>
        <a href="#" class="btn-agendar">Agendar Consulta</a>
    </div>
</div>

</body>
</html>