<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resumen;

/**
 * ResumenSearch represents the model behind the search form about `app\models\Resumen`.
 */
class ResumenSearch extends Resumen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uwi', 'well_name', 'drillers_td', 'elevation', 'block_id', 'location_table', 'field_name', 'well_alias', 'plot_name', 'ground_elevation', 'spud_date', 'insert_date', 'inicio_perf', 'fin_drill', 'comp_date', 'primary_source', 'class', 'operator', 'form_at_td', 'tvd', 'log_td', 'prov_st', 'country', 'county', 'discover_well', 'agent', 'description', 'district', 'govt_assigned_no', 'whipstock_depth', 'rig_no', 'contractor', 'geologic_providence', 'hole_direction', 'initial_class', 'node_x', 'node_y', 'latitude', 'longitude', 'datum'], 'safe'],
            [['well_number'], 'integer'],
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
        $query = Resumen::find();

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
            'well_number' => $this->well_number,
            'spud_date' => $this->spud_date,
            'insert_date' => $this->insert_date,
            'inicio_perf' => $this->inicio_perf,
            'fin_drill' => $this->fin_drill,
            'comp_date' => $this->comp_date,
        ]);

        $query->andFilterWhere(['like', 'uwi', $this->uwi])
            ->andFilterWhere(['like', 'well_name', $this->well_name])
            ->andFilterWhere(['like', 'drillers_td', $this->drillers_td])
            ->andFilterWhere(['like', 'elevation', $this->elevation])
            ->andFilterWhere(['like', 'block_id', $this->block_id])
            ->andFilterWhere(['like', 'location_table', $this->location_table])
            ->andFilterWhere(['like', 'field_name', $this->field_name])
            ->andFilterWhere(['like', 'well_alias', $this->well_alias])
            ->andFilterWhere(['like', 'plot_name', $this->plot_name])
            ->andFilterWhere(['like', 'ground_elevation', $this->ground_elevation])
            ->andFilterWhere(['like', 'primary_source', $this->primary_source])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'operator', $this->operator])
            ->andFilterWhere(['like', 'form_at_td', $this->form_at_td])
            ->andFilterWhere(['like', 'tvd', $this->tvd])
            ->andFilterWhere(['like', 'log_td', $this->log_td])
            ->andFilterWhere(['like', 'prov_st', $this->prov_st])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'county', $this->county])
            ->andFilterWhere(['like', 'discover_well', $this->discover_well])
            ->andFilterWhere(['like', 'agent', $this->agent])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'govt_assigned_no', $this->govt_assigned_no])
            ->andFilterWhere(['like', 'whipstock_depth', $this->whipstock_depth])
            ->andFilterWhere(['like', 'rig_no', $this->rig_no])
            ->andFilterWhere(['like', 'contractor', $this->contractor])
            ->andFilterWhere(['like', 'geologic_providence', $this->geologic_providence])
            ->andFilterWhere(['like', 'hole_direction', $this->hole_direction])
            ->andFilterWhere(['like', 'initial_class', $this->initial_class])
            ->andFilterWhere(['like', 'node_x', $this->node_x])
            ->andFilterWhere(['like', 'node_y', $this->node_y])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'datum', $this->datum]);

        return $dataProvider;
    }

    public function getPozosTotalIni($sigla)
    {
        $anio=date('Y');
        $count = $this::find()
            ->andwhere(['>=', 'insert_date', date('Y').'-01-01'])
            ->andwhere(['>=', 'inicio_perf', date('Y').'-01-01'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }
    public function getPozosTotalPerf($sigla)
    {
        $anio=date('Y');
        $count = $this::find()
            ->andwhere(['>=', 'inicio_perf', date('Y').'-01-01'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }

    public function getPozosIni($mes,$sigla)
    {
        $count = $this::find()
            ->andwhere(['>=', 'insert_date', date('Y').'-'.$mes.'-01'])
            ->andwhere(['<=', 'insert_date', date('Y').'-'.$mes.'-31'])
            ->andwhere(['>=', 'inicio_perf', date('Y').'-01-01'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }
    public function getPozosIniTotalMes($mes,$sigla)
    {
        $count = $this::find()
            ->andwhere(['>=', 'insert_date', date('Y').'-'.$mes.'-01'])
            ->andwhere(['<=', 'insert_date', date('Y').'-'.$mes.'-31'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }
    public function getPozosIniRest($mes,$sigla)
    {
        $count = $this::find()
            ->andwhere(['>=', 'insert_date', date('Y').'-'.$mes.'-01'])
            ->andwhere(['<=', 'insert_date', date('Y').'-'.$mes.'-31'])
            ->andwhere(['<', 'inicio_perf', date('Y').'-01-01'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }
    public function getPozosPerf($mes,$sigla)
    {
        $anio=date('Y');
        $count = $this::find()
            ->andwhere(['>=', 'inicio_perf', date('Y').'-'.$mes.'-01'])
            ->andwhere(['<=', 'inicio_perf', date('Y').'-'.$mes.'-31'])
            ->andwhere(['like', 'uwi', $sigla])
            ->count();
        return $count;
    }

}
