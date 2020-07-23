<?php


namespace application\components;


class Validator
{
    public $rules = [];

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function validate()
    {
        $rules = $this->rules;
        if (!empty($rules)) {
            $data = [];

            if (isset($rules['required'])) {
                $required = $rules['required'];
                foreach ($required as $key=>$value){
                    if ($value == '') {
                        $data[$key] = ucfirst(str_replace('_', ' ', $key).' is required.');
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }

            if (isset($rules['password'])) {
                $password = $rules['password'];
                foreach ($password as $key=>$value) {
                    if (strlen($value) < 3 || strlen($value) > 20) {
                        $data[$key] = ucfirst(str_replace('_', ' ', $key).' must be at least 3 chars.');
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }
        }
        return [];
    }
}