<?php

class Produto {
    public $nome;
    public $preco;
    public $codigo;

    public function __construct($nome, $preco, $codigo) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->codigo = $codigo;
    }

    public function exibirProduto() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ",", ".") . "<br>";
    }

    public function aplicarDesconto($percentual) {
        if ($percentual < 0 || $percentual > 100) {
            echo "Desconto inválido!<br>";
            return;
        }

        $desconto = $this->preco * ($percentual / 100);
        $this->preco = $this->preco - $desconto;

        echo "Desconto de " . $percentual . "% aplicado.<br>";
        echo "Novo preço: R$ " . number_format($this->preco, 2, ",", ".") . "<br>";
    }
}

class Livro extends Produto {
    public $autor;
    public $isbn;

    public function __construct($nome, $preco, $codigo, $autor, $isbn) {
        parent::__construct($nome, $preco, $codigo);
        $this->autor = $autor;
        $this->isbn = $isbn;
    }
}

class Eletronico extends Produto {
    public $marca;
    public $garantiaMeses;

    public function __construct($nome, $preco, $codigo, $marca, $garantiaMeses) {
        parent::__construct($nome, $preco, $codigo);
        $this->marca = $marca;
        $this->garantiaMeses = $garantiaMeses;
    }
}

$livro = new Livro("PHP Básico", 100, "L01", "João Silva", "123456");
$eletronico = new Eletronico("Notebook", 2000, "E01", "Dell", 12);

echo "<h2>Livro</h2>";
$livro->exibirProduto();
echo "Autor: " . $livro->autor . "<br>";
echo "ISBN: " . $livro->isbn . "<br>";
$livro->aplicarDesconto(10);

echo "<h2>Eletrônico</h2>";
$eletronico->exibirProduto();
echo "Marca: " . $eletronico->marca . "<br>";
echo "Garantia: " . $eletronico->garantiaMeses . " meses<br>";
$eletronico->aplicarDesconto(15);

echo "<h2>Teste de desconto inválido</h2>";
$livro->aplicarDesconto(-5);
$livro->aplicarDesconto(110);

?>
