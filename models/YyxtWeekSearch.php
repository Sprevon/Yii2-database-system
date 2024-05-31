<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\YyxtWeek;

/**
 * YyxtWeekSearch represents the model behind the search form about `app\models\YyxtWeek`.
 */
class YyxtWeekSearch extends YyxtWeek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'week_id', 'semester_id'], 'integer'],
            [['week_detail'], 'safe'],
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
        $query = YyxtWeek::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'week_id' => $this->week_id,
            'semester_id' => $this->semester_id,
        ]);

        $query->andFilterWhere(['like', 'week_detail', $this->week_detail]);

        return $dataProvider;
    }
}
