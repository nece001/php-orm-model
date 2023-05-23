<?php

namespace Nece001\PhpOrmModel\Interfaces;

use think\Model;

class TP5Model extends Model implements Model
{

    /**
     * 获取完整表名
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return string
     */
    public function getName()
    {
        return '';
    }

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
    }
}
