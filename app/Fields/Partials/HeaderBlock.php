<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class HeaderBlock extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $headerBlock = new FieldsBuilder('header_block');

        $headerBlock
            ->addText('title_field',[
                'label' => 'Título',
                'required' => 1,
                'maxlength' => '100',
            ])
            ->addTextarea('heading_content',[
                'label' => 'Leading',
                'required' => 10,
                'rows' => '2',
                'maxlength' => '255',
            ]);

        return $headerBlock;
    }
}
