 <?php
    if (isset($_POST['calcular'])) {
        $combustivel = $_POST['combustivel'];
        $litros = $_POST['litros'];
        $preco = 0;

        // Verifica o preço com base no combustível escolhido
        if ($combustivel == "gasolina") {
            $preco = 6.20;
        } else if ($combustivel == "etanol") {
            $preco = 4.20;
        } else if ($combustivel == "diesel") {
            $preco = 6.00;
        }

        $total = $litros * $preco;

        echo "<div class='resultado'>";
        echo "Você abasteceu " . $litros . " litros.<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
        echo "</div>";
    }
    ?>
</div>

</body>
</html>