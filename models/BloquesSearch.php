<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bloques;

/**
 * BloquesSearch represents the model behind the search form about `app\models\Bloques`.
 */
class BloquesSearch extends Bloques
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bloque'], 'integer'],
            [['bloque', 'yacimiento', 'campo', 'zona_supervisoria', 'unidad_explotacion', 'distrito'], 'safe'],
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
        $query = Bloques::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_bloque' => $this->id_bloque,
        ]);

        $query->andFilterWhere(['like', 'bloque', $this->bloque])
            ->andFilterWhere(['like', 'yacimiento', $this->yacimiento])
            ->andFilterWhere(['like', 'campo', $this->campo])
            ->andFilterWhere(['like', 'zona_supervisoria', $this->zona_supervisoria])
            ->andFilterWhere(['like', 'unidad_explotacion', $this->unidad_explotacion])
            ->andFilterWhere(['like', 'distrito', $this->distrito]);

        return $dataProvider;
    }
}
