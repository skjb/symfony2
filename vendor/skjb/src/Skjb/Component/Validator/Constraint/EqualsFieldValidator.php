<?php

namespace Skjb\Component\Validator\Constraint;

use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Constraint;

class EqualsFieldValidator extends ConstraintValidator
{
    public function isValid($value, Constraint $constraint)
    {
        if ($value !== $this->context->getRoot()->get($constraint->field)->getData()) {
            
            $this->setMessage($constraint->message);
            
            return false;
        }
        
        return true;
    }
}