<?php
class Activity extends Model {
    protected static $tableName = 'activity';
    protected static $columns = [
        'id',
        'date',
        'punctuation',
        'protocol',
        'type',
        'applicant',
        'supervisor',
        'tax_code'
        
    ];

    public function insert() {
        $this->validate();
        return parent::insert();
    }

    public function update() {
        $this->validate();
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->protocol) {
            $errors['protocol'] = 'O protocolo é um campo obrigatório.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}