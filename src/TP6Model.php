<?php

namespace Nece001\PhpOrmModel\Interfaces;

use think\Model;

class TP6Model extends Model implements Model
{
    /**
     * 开启事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function startTrans()
    {
        $this->db()->startTrans();
    }

    /**
     * 提交事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function commit()
    {
        $this->db()->commit();
    }

    /**
     * 回滚事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function rollback()
    {
        $this->db()->rollback();
    }
}
