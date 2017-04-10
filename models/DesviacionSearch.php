<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Desviacion;

/**
 * DesviacionSearch represents the model behind the search form about `app\models\Desviacion`.
 */
class DesviacionSearch extends Desviacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uwi', 'md', 'tvd', 'desviation', 'azimuth', 'dx', 'dy'], 'safe'],
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
        $query = Desviacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'uwi', $this->uwi])
            ->andFilterWhere(['like', 'md', $this->md])
            ->andFilterWhere(['like', 'tvd', $this->tvd])
            ->andFilterWhere(['like', 'desviation', $this->desviation])
            ->andFilterWhere(['like', 'azimuth', $this->azimuth])
            ->andFilterWhere(['like', 'dx', $this->dx])
            ->andFilterWhere(['like', 'dy', $this->dy]);

        return $dataProvider;
    }
}
