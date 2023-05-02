<?php

namespace app\core\form;


class TextareaField extends BaseField
{
    public function renderInput(): string
    {
       return sprintf('<textarea name="%s" class="form-controller%s">%s</textarea>',
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? 'is-invalid' : '',
    );
    }
}