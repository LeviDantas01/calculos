<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculos aritimeticos</title>
</head>
<body>
    <main>
        <div class="container">
            <form action="index.php" method="post">
                <?php include 'php.php'; ?>
                <h2>Calculos aritimeticos</h2>
                <h3>Informe 5 números e veja os resultados</h3>
                <div class="inputs">
                    <label>Média de Porutugues</label>
                    <input type="number" name="mediaPortuges" min="1" max="10" step="0.1" required>
                    
                    <label>Média de Matematica</label>
                    <input type="number" name="mediaMatematica" min="1" max="10" step="0.1" required>
                    
                    <label>Média de Historia</label>
                    <input type="number" name="mediaHistoria" min="1" max="10" step="0.1" required>

                    <label>Média de Fisica</label>
                    <input type="number" name="mediaFisica" min="1" max="10" step="0.1" required>

                    <label>Média de Geografia</label>
                    <input type="number" name="mediaGeografia" min="1" max="10" step="0.1" required>
                </div>
                <button type="submit">
                    Calcular
                </button>
                <div class="respostas">
                  <label>Media</label>
                  <input type="number" value="<?php echo media($mediaPortuges,$mediaMatematica,$mediaHistoria,$mediaFisica,$mediaGeografia);?>">
                </div>
                <div class="respostas">
                  <label>Media ponderada</label>
                  <input type="number" value="<?php echo meidaPonderada($mediaPortuges,$mediaMatematica,$mediaHistoria,$mediaFisica,$mediaGeografia); ?>">
                </div>
                <div class="respostas">
                  <label>Menor valor</label>
                  <input type="number" value="<?php echo menorValor($mediaPortuges,$mediaMatematica,$mediaHistoria,$mediaFisica,$mediaGeografia);?>">
                </div>
                <div class="respostas">
                  <label>Maior valor</label>
                  <input type="number" value="<?php echo maiorValor($mediaPortuges,$mediaMatematica,$mediaHistoria,$mediaFisica,$mediaGeografia);?>">
                </div>
            </form>
        </div>
    </main>
</body>
</html>

