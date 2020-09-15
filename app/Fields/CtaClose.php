<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\ctaContact;

class CtaClose extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $ctaClose = new FieldsBuilder('cta_close');

        $ctaClose
            ->setLocation('post_type', '==', 'page');

        $ctaClose
            ->addFields($this->get(ctaContact::class));

        return $ctaClose->build();
    }
}
