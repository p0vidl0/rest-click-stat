<?php

namespace app\modules\click\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\click\models\Click;

/**
 * ClickSearch represents the model behind the search form about `app\modules\click\models\Click`.
 */
class ClickSearch extends Click
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'timestamp'], 'integer'],
            [['object', 'referer', 'user_ip4', 'user_host', 'user_agent'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Click::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'object', $this->object])
            ->andFilterWhere(['like', 'referer', $this->referer])
            ->andFilterWhere(['like', 'user_ip4', $this->user_ip4])
            ->andFilterWhere(['like', 'user_host', $this->user_host])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent]);

        return $dataProvider;
    }
}
