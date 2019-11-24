<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contestants Model
 *
 * @method \App\Model\Entity\Contestant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contestant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contestant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contestant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contestant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contestant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contestant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contestant findOrCreate($search, callable $callback = null, $options = [])
 */
class ContestantsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
       
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 255)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->dateTime('birthday')
            ->allowEmptyDateTime('birthday');

        $validator
            ->dateTime('school')
            ->allowEmptyDateTime('school');

        $validator
            ->scalar('image')
            ->allowEmptyFile('image');

        return $validator;
    }
}
