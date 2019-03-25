<?php

class ProdutosController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->produtos = $this->getProdutos();
    }

    public function getAction()
    {
        
    }

    private function getProdutos()
    {
        return [
            new Produto(1, "Laranja", 3.25),
            new Produto(2, "Maçã", 1.25),
            new Produto(3, "Orocuã", 3.5),
        ];
    }

}

