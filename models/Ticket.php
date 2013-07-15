<?php

/**
 * --- BEGIN AutoGenerated by tool/generateProperties ---
 *
 * This is the model class for table 'ticket'
 *
 * @method Ticket with() with()
 * @method Ticket find() find($condition, array $params = array())
 * @method Ticket[] findAll() findAll($condition = '', array $params = array())
 * @method Ticket findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method Ticket[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method Ticket findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method Ticket[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method Ticket findBySql() findBySql($sql, array $params = array())
 * @method Ticket[] findAllBySql() findAllBySql($sql, array $params = array())
 *
 * Properties from table fields
 * @property integer $id
 * @property string $name
 *
 * --- END AutoGenerated by tool/generateProperties ---
 */
class Ticket extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className
     * @return Ticket the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'ticket';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }


    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            // search fields
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
        );
    }


    /**
     * @return CActiveDataProvider
     */
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('t.id', $this->id);
        $criteria->compare('t.name', $this->name, true);
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}