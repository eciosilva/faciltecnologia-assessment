<?php

namespace App\Model\Repository;

use App\Model\Entity\Banco;

class BancoRepository extends BaseRepository
{

    public static function listConveniosGroupedByBanco()
    {
        $sql = "SELECT b.nome, cnv.verba, 
                    MIN(c.data_inclusao) AS contrato_data_antigo, MAX(c.data_inclusao) AS contrato_data_novo,
                    SUM(c.valor) AS contrato_valor_total
                FROM tb_contrato c
                JOIN tb_convenio_servico cs
                    ON cs.codigo = c.convenio_servico
                JOIN tb_convenio cnv
                    ON cnv.codigo = cs.convenio
                JOIN tb_banco b
                    ON b.codigo = cnv.banco
                GROUP BY b.nome, cnv.verba
                ORDER BY b.nome ASC";
                
        $data = parent::$conn->query($sql, \PDO::FETCH_ASSOC)->fetchAll();

        return $data;
    }
}