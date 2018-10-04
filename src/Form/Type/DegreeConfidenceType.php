<?php
declare(strict_types = 1);

namespace App\Form\Type;

use App\DBAL\Types\DegreeConfidenceType as DegreeConfidence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DegreeConfidenceType extends AbstractType
{
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => DegreeConfidence::getChoices(),
            'choices_as_values' => true,
        ]);
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
