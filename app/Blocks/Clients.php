<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Clients extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Clients';

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
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
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
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $clients = new FieldsBuilder('clients');

        $clients
            ->addText('subheading', [ 'label' => 'Sub heading', 'required' => 0, 'maxlength' => '50','wrapper' => ['width' => '50',] ])
            ->addText('heading', [ 'label' => 'Heading', 'required' => 1, 'maxlength' => '200', 'wrapper' => ['width' => '50',]])
            ->addTextarea('summary',['required' => 1, 'rows' => '4',])

            ->addRepeater('client', [
                'min' => 3,
                'max' => 20,
                'button_label' => 'Add Logo',
                'layout' => 'block',
                'label' => 'Logos linea 1',
              ])
                ->addImage('logo', [
                    'label' => 'Logo Client',
                    'preview_size' => 'thumbnail',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ])
            ->endRepeater()
            ->addRepeater('client2', [
                'min' => 3,
                'max' => 20,
                'button_label' => 'Add Logo line 2',
                'label' => 'Logos linea 2',
              ])
                ->addImage('logo', [
                    'label' => 'Logo Client',
                    'preview_size' => 'thumbnail',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ])

            ->endRepeater();

        return $clients->build();
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

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
