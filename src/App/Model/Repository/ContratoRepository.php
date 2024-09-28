<?php

namespace App\Model\Repository;

use App\Model\Entity\Contrato;

class ContratoRepository extends BaseRepository
{

    /**
     *
     */
    public static function listContratos()
    {
        $sql = "SELECT b.nome, cnv.verba, c.codigo AS contrato_codigo, c.data_inclusao, c.valor, c.prazo
                FROM tb_contrato c
                JOIN tb_convenio_servico cs
                    ON cs.codigo = c.convenio_servico
                JOIN tb_convenio cnv
                    ON cnv.codigo = cs.convenio
                JOIN tb_banco b
                    ON b.codigo = cnv.banco
                ORDER BY b.nome ASC, c.codigo ASC";
                
        $data = parent::$conn->query($sql, \PDO::FETCH_ASSOC)->fetchAll();

        return $data;
    }
}