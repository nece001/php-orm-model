<?php

namespace Nece001\PhpOrmModel\Interfaces;

/**
 * Model
 * 
 * @Author gjw
 * @DateTime 2023-05-23
 */
interface Model
{
    /**
     * 获取完整表名
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return string
     */
    public function getName();

    /**
     * 开启事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function startTrans();

    /**
     * 提交事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function commit();

    /**
     * 回滚事务
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @return void
     */
    public function rollback();

    /**
     * 设置表别名
     *
     * @Author gjw
     * @DateTime 2023-05-23
     *
     * @param string $alias
     *
     * @return $this
     */
    public function alias($alias);
}
