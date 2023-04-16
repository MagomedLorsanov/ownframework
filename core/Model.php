<?php

namespace app\core;

abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_email = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

    public function loadData($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        foreach ($data as $key => $value) {
            if (property_exists($this,$key)) {
                $this->{$key} = $value;
            }
        }
    }

    abstract public function rules() :array;

    public array $errors = [];
    
    public function validate()
    {
        foreach ($this->rules as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if(!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName == self::RULE_REQUIRED && !$value) {
                    $this->AddError($attribute, self::RULE_REQUIRED);
                }
            }
        }
        return empty($this->errors);
    }

    public function addError(string $attribute, string $rule)
    {
        $message = $this->errorMessages()[$rules] ?? '';
        $this->errors[$attribute][] = $message;
    }

    public function errorMassages()
    {
        return [
            self::RULE_REQUIRED => 'This files is required',
            self::RULE_email => 'This files must be valid email address',
            self::RULE_MIN => 'Min length of this field must be {min}',
            self::RULE_MAX => 'Max length of this field must be {max}',
            self::RULE_MATCH => 'This files must be the same as {match}'
        ];
    }
}