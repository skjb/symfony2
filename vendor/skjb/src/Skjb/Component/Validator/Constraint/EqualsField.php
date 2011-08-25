<?php

namespace Skjb\Component\Validator\Constraint;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class EqualsField extends Constraint
{
    public $message = 'This value does not equal the other field';
    
    public $field;
    
    public function getDefaultOption()
    {
        return 'field';
    }
    
    public function getRequiredOptions()
    {
        return array('field');
    }
}