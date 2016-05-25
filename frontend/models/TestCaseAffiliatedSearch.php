<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestCaseAffiliated;

/**
 * TestCaseAffiliatedSearch represents the model behind the search form about `app\models\TestCaseAffiliated`.
 */
class TestCaseAffiliatedSearch extends TestCaseAffiliated
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tca_id', 'delete', 'created_at', 'updated_at'], 'integer'],
            [['case_id', 'label'], 'safe'],
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
        $query = TestCaseAffiliated::find();

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
            'tca_id' => $this->tca_id,
            'delete' => $this->delete,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'case_id', $this->case_id])

            ->andFilterWhere(['like', 'label', $this->label]);

        return $dataProvider;
    }

}
