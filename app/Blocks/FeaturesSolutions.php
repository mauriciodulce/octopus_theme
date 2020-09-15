<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FeaturesSolutions extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'FeaturesSolutions';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'common';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'index-card';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post types.
     *
     * @var array
     */
    public $post_types = ['post', 'page'];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The block alignment.
     *
     * @var string
     */
    public $align = 'center';

    /**
     * The block features.
     *
     * @var array
     */
    public $supports = [
        '__experimental_jsx' => true,
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'items' => $this->items(),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $featuresSolutions = new FieldsBuilder('features_solutions');

        $featuresSolutions
            ->addText('text_field',[
                'label' => 'Titulo',
                'required' => 1,
            ])
            ->addTextarea('presentation',[
                'required' => 1,
                'rows' => 3,
            ])
            ->addRepeater('solution',[
                'button_label' => 'Add Solution',
                'min' => 1,
                'max' => 4,
                'layout' => 'block',
                'required' => 1,
            ])
                ->addText('title',[
                    'required' => 1,
                ])
                ->addTextarea('summary',[
                    'required' => 1,
                    'max' => '200',
                ])
                ->addSelect('icon_type',['label' => 'Select Icon',])
                    ->addChoice('yellow', 'Yellow')
                    ->addChoice('yellow2', 'Yellow2')
                ->addLink('link' , [
                    'label' => 'Link Field',
                ])

            ->endRepeater();

        return $featuresSolutions->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('solution') ?: [];
    }
}
