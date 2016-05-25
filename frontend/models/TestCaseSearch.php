<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestCase;

/**
 * TestCaseSearch represents the model behind the search form about `app\models\TestCase`.
 */
class TestCaseSearch extends TestCase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_id', 'illustration', 'delete', 'created_at', 'updated_at'], 'integer'],
            [['id_case', 'route', 'key', 'value', 'label',  'trigger'], 'safe'],
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
        $query = TestCase::find();

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
            'case_id' => $this->case_id,
            'illustration' => $this->illustration,
            'delete' => $this->delete,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'id_case', $this->id_case])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'key', $this->key])
            ->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'trigger', $this->trigger]);

        return $dataProvider;
    }
}
