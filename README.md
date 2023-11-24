# Qualidade-de-software
Uma calculadora que calcula as médias das notas dos alunos com base em suas entradas. Além disso, incluiu um conjunto de testes unitários usando uma classe chamada CalculadoraMediasTest. Esses testes têm o objetivo de garantir a funcionalidade e correção da calculadora.

Aqui está uma explicação dos principais componentes do seu código:

Código da Calculadora
O código PHP define um formulário para inserção do número de alunos e suas respectivas notas.
Calcula e exibe a média das notas para cada aluno e a média geral da turma quando o formulário é enviado.
Código dos Testes Unitários
Inclusão de Dependências:

Inclui a classe necessária (Random) para gerar valores aleatórios e simular a entrada do usuário.
Ajusta o caminho para o arquivo PHP contendo o código da calculadora.
Classe de Teste e Construtor:

Cria uma classe de teste chamada CalculadoraMediasTest.
No construtor, instancia a classe Random para gerar valores aleatórios.
Método de Teste (testCalculadoraMedias):

Simula o uso da calculadora definindo valores aleatórios para o número de alunos e suas notas.
Captura a saída do código PHP durante a execução do teste usando o buffering de saída (ob_start() e ob_get_clean()).
Inclui o arquivo PHP contendo o código da calculadora.
Adiciona asserções para validar expectativas específicas de saída. (Observação: Exemplos estão comentados e você deve personalizá-los com base nas suas expectativas reais de saída.)
Instância e Execução do Teste:

Cria uma instância da classe de teste ($test = new CalculadoraMediasTest();).
Chama o método de teste para executar o teste ($test->testCalculadoraMedias();).



