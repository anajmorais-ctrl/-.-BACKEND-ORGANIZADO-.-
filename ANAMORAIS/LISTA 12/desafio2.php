    <?php
    if (isset($_POST['calcular'])) {
        $nome = $_POST['nome'];
        $veiculo = $_POST['veiculo'];
        $horas = $_POST['horas'];
        $valor_hora = 0;

        if ($veiculo == "moto") {
            $valor_hora = 5.00;
        } else if ($veiculo == "carro") {
            $valor_hora = 8.00;
        } else if ($veiculo == "caminhonete") {
            $valor_hora = 12.00;
        }

        $total = $horas * $valor_hora;

        echo "<div class='resultado'>";
        echo "Motorista: " . $nome . "<br>";
        echo " Tempo: " . $horas . " horas<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
        echo "</div>";
    }
    ?>
</div>

</body>
</html>