<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pozos".
 *
 * @property string $uwi
 * @property string $well_name
 * @property integer $well_number
 * @property string $drillers_td
 * @property string $elevation
 * @property string $block_id
 * @property string $location_table
 * @property string $field_name
 * @property string $well_alias
 * @property string $plot_name
 * @property string $ground_elevation
 * @property string $spud_date
 * @property string $insert_date
 * @property string $inicio_perf
 * @property string $fin_drill
 * @property string $comp_date
 * @property string $primary_source
 * @property string $class
 * @property string $operator
 * @property string $form_at_td
 * @property string $tvd
 * @property string $log_td
 * @property string $prov_st
 * @property string $country
 * @property string $county
 * @property string $discover_well
 * @property string $agent
 * @property string $description
 * @property string $district
 * @property string $govt_assigned_no
 * @property string $whipstock_depth
 * @property string $rig_no
 * @property string $contractor
 * @property string $geologic_providence
 * @property string $hole_direction
 * @property string $initial_class
 * @property string $node_x
 * @property string $node_y
 * @property string $latitude
 * @property string $longitude
 * @property string $datum
 */
class Resumen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pozos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uwi', 'well_name', 'well_number', 'drillers_td', 'elevation', 'block_id', 'location_table', 'field_name', 'well_alias', 'plot_name', 'ground_elevation', 'spud_date', 'insert_date', 'inicio_perf', 'fin_drill', 'comp_date', 'primary_source', 'class', 'operator', 'form_at_td', 'tvd', 'log_td', 'prov_st', 'country', 'county', 'discover_well', 'agent', 'description', 'district', 'govt_assigned_no', 'whipstock_depth', 'rig_no', 'contractor', 'geologic_providence', 'hole_direction', 'initial_class', 'node_x', 'node_y', 'latitude', 'longitude', 'datum'], 'required'],
            [['well_number'], 'integer'],
            [['spud_date', 'insert_date', 'inicio_perf', 'fin_drill', 'comp_date'], 'safe'],
            [['uwi'], 'string', 'max' => 16],
            [['well_name', 'drillers_td', 'elevation', 'block_id', 'location_table', 'field_name', 'well_alias', 'plot_name', 'ground_elevation', 'primary_source', 'operator', 'form_at_td', 'tvd', 'log_td', 'agent', 'description', 'whipstock_depth', 'rig_no'], 'string', 'max' => 20],
            [['class', 'prov_st', 'country', 'county'], 'string', 'max' => 10],
            [['discover_well', 'district', 'geologic_providence', 'hole_direction', 'initial_class'], 'string', 'max' => 5],
            [['govt_assigned_no'], 'string', 'max' => 15],
            [['contractor', 'node_x', 'node_y', 'latitude', 'longitude', 'datum'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uwi' => 'Uwi',
            'well_name' => 'Well Name',
            'well_number' => 'Well Number',
            'drillers_td' => 'Drillers Td',
            'elevation' => 'Elevation',
            'block_id' => 'Block ID',
            'location_table' => 'Location Table',
            'field_name' => 'Field Name',
            'well_alias' => 'Well Alias',
            'plot_name' => 'Plot Name',
            'ground_elevation' => 'Ground Elevation',
            'spud_date' => 'Spud Date',
            'insert_date' => 'Insert Date',
            'inicio_perf' => 'Inicio Perf',
            'fin_drill' => 'Fin Drill',
            'comp_date' => 'Comp Date',
            'primary_source' => 'Primary Source',
            'class' => 'Class',
            'operator' => 'Operator',
            'form_at_td' => 'Form At Td',
            'tvd' => 'Tvd',
            'log_td' => 'Log Td',
            'prov_st' => 'Prov St',
            'country' => 'Country',
            'county' => 'County',
            'discover_well' => 'Discover Well',
            'agent' => 'Agent',
            'description' => 'Description',
            'district' => 'District',
            'govt_assigned_no' => 'Govt Assigned No',
            'whipstock_depth' => 'Whipstock Depth',
            'rig_no' => 'Rig No',
            'contractor' => 'Contractor',
            'geologic_providence' => 'Geologic Providence',
            'hole_direction' => 'Hole Direction',
            'initial_class' => 'Initial Class',
            'node_x' => 'Node X',
            'node_y' => 'Node Y',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'datum' => 'Datum',
        ];
    }
}
