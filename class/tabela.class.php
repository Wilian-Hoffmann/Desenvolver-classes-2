<?php
class Tabela {
    private $alimentos = array();
    private $colunas = array();
    private $pagina;

    public function __construct($alimentos, $colunas, $pagina) {
        $this->alimentos = $alimentos;
        $this->colunas = $colunas;
        $this->pagina = $pagina;
    }

    function __toString() {
        $retorno = "<table>";

        $retorno .= "<tr>";
        foreach ($this->colunas as $coluna) {
            $retorno .= "<td>";
            $retorno .= "<b>" . $coluna . "</b>";
            $retorno .= "</td>";
        }

        $retorno .= "<td>";
        $retorno .= "<b>Alteração</b>";
        $retorno .= "</td>";

        $retorno .= "<td>";
        $retorno .= "<b>Exclusão</b>";
        $retorno .= "</td>";


        $retorno .= "</tr>";

        foreach ($this->alimentos as $key=>$alimento) {
            if ( $key+1 > ($this->pagina*10) -10 && $key+1 < $this->pagina*10 ) {
                $retorno .= "<tr>";

                $retorno .= "<td>";
                $retorno .= $alimento->getAlimento();
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= $alimento->getPais();
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= "<a>Alterar</a>";
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= "<a>Excluir</a>";
                $retorno .= "</td>";

                $retorno .= "</tr>";
            }
        }

        $retorno .= "</table>";

         return $retorno;
    }
}