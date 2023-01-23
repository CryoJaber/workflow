<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Email Model
 *
 * @method \App\Model\Entity\Email newEmptyEntity()
 * @method \App\Model\Entity\Email newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Email[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Email get($primaryKey, $options = [])
 * @method \App\Model\Entity\Email findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Email patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Email[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Email|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Email saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Email[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Email[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Email[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Email[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmailTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('email');
        $this->setDisplayField('message_id');
        $this->setPrimaryKey('message_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('message')
            ->maxLength('message', 10000)
            ->notEmptyString('message');

        $validator
            ->allowEmptyFile('file');

        $validator
            ->scalar('mailingdate')
            ->maxLength('mailingdate', 40)
            ->allowEmptyString('mailingdate');

        $validator
            ->nonNegativeInteger('starred_status')
            ->notEmptyString('starred_status');

        $validator
            ->scalar('sender_email')
            ->maxLength('sender_email', 200)
            ->notEmptyString('sender_email');

        $validator
            ->scalar('reciever_email')
            ->maxLength('reciever_email', 200)
            ->notEmptyString('reciever_email');

        $validator
            ->nonNegativeInteger('inbox_status')
            ->notEmptyString('inbox_status');

        $validator
            ->nonNegativeInteger('sent_status')
            ->notEmptyString('sent_status');

        $validator
            ->nonNegativeInteger('draft_status')
            ->notEmptyString('draft_status');

        $validator
            ->nonNegativeInteger('trash_status')
            ->notEmptyString('trash_status');

        $validator
            ->scalar('email_subject')
            ->maxLength('email_subject', 200)
            ->allowEmptyString('email_subject');

        $validator
            ->nonNegativeInteger('read_status')
            ->notEmptyString('read_status');

        $validator
            ->nonNegativeInteger('delete_status')
            ->notEmptyString('delete_status');

        return $validator;
    }
}
