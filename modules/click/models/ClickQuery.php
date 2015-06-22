<?php

namespace app\modules\click\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[Click]].
 *
 * @see Click
 */
class ClickQuery extends ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Click[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Click|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}