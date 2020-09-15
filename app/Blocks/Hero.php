<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Hero';

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
    public $icon = 'format-image';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['Hero image, Image'];

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
    public $multiple ='false';

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
        $hero = new FieldsBuilder('hero');

        $hero
            ->addImage('hero_image', [
                'return_format' => 'array',
                'preview_size' => 'full',
                'instructions' => 'Imagen para usar en el primer fold del home',
            ])
            ->addText('hero_text', ['required' => 1,'label' => 'Heading', 'wrapper' => ['width' => '50',] ])
            ->addTextarea('sub_heading',['label' => 'Sub Heading', 'rows' => '2', 'wrapper' => ['width' => '50',]]);
        return $hero->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: [];
    }
}
