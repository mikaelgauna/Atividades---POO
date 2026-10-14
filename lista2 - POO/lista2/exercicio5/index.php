<?php
class Estudo {
    public static $quantidade = 0;
    private $materia;

    public function __construct($materia) {
        $this->materia = $materia;
        self::$quantidade++;
    }

    // self::$quantidade acessa uma propriedade da classe, compartilhada por todos os objetos.
    // $this->materia acessa a propriedade de um objeto específico.
    //
    // Teste proposital que causaria erro se fosse executado:
    // public static function erro() {
    //     echo $this->materia;
    // }
    //
    // Erro esperado: "Using $this when not in object context".
    // Um método estático não está ligado a um objeto específico.

    public static function mostrarQuantidade() {
        echo "Quantidade de objetos criados: " . self::$quantidade;
    }

    public function mostrarMateria() {
        echo "Matéria: " . $this->materia . "<br>";
    }
}

$estudo1 = new Estudo("Programação III");
$estudo2 = new Estudo("Estrutura de Dados");

$estudo1->mostrarMateria();
Estudo::mostrarQuantidade();
