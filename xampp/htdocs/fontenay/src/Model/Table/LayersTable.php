<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Layers Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Highlights
 *
 * @method \App\Model\Entity\Layer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Layer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Layer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Layer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Layer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Layer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Layer findOrCreate($search, callable $callback = null)
 */
class LayersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('layers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Highlights', [
            'foreignKey' => 'layer_id',
            'targetForeignKey' => 'highlight_id',
            'joinTable' => 'highlights_layers'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('Name');

        $validator
            ->integer('OrderNo')
            ->allowEmpty('OrderNo');

        return $validator;
    }
}
