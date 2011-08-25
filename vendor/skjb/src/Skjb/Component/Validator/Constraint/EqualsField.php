<?php

namespace Skjb\Component\Validator\Constraint;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class EqualsField extends Constraint
{
    public $message = 'This value does not equal the {{ field }} field';
    public $field;
    
    /**
     * {@inheritDoc}
     */
    public function getDefaultOption()
    {
        return 'field';
    }
    
    /**
     * {@inheritDoc}
     */
    public function getRequiredOptions()
    {
        return array('field');
    }
}