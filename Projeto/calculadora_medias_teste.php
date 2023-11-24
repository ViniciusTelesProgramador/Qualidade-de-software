<?php
require_once 'path/to/Random.php'; 

class CalculadoraMediasTest {
    private $rn;

    public function __construct() {
        $this->rn = new Random();
    }

    public function testCalculadoraMedias() {
        $_POST['qtdAlunos'] = $this->rn->nextInt(1, 10);

        for ($i = 1; $i <= $_POST['qtdAlunos']; $i++) {
            $_POST["nota1_$i"] = $this->rn->nextFloat(0, 10);
            $_POST["nota2_$i"] = $this->rn->nextFloat(0, 10);
            $_POST["nota3_$i"] = $this->rn->nextFloat(0, 10);
        }

        ob_start();
        include 'path/to/seu/arquivo.php'; // Substitua pelo caminho correto para o arquivo PHP
        $output = ob_get_clean();

  
        // Exemplo de asserção para verificar se a saída contém a string 'Média do Aluno 1:'
        $this->assertTrue(strpos($output, 'Média do Aluno 1:') !== false, "A saída deve conter 'Média do Aluno 1:'");
        
        // Exemplo de asserção para verificar se a saída contém a string 'Média da Turma:'
        $this->assertTrue(strpos($output, 'Média da Turma:') !== false, "A saída deve conter 'Média da Turma:'");
    }

    private function assertTrue($condition, $message) {
        if (!$condition) {
            throw new \Exception($message);
        }
    }
}

$test = new CalculadoraMediasTest();
$test->testCalculadoraMedias();
?>
