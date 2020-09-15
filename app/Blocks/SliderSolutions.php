<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SliderSolutions extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'SliderSolutions';

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
    public $icon = 'images-alt2';

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
    public $post_types = ['page'];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The block alignment.
     *
     * @var string
     */
    public $align = '';

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
        $sliderSolutions = new FieldsBuilder('slider_solutions');

        $sliderSolutions
            ->addText('text', [ 'label' => 'Sub heading', 'required' => 0, 'maxlength' => '20'])
            ->addText('heading', [ 'label' => 'Heading', 'required' => 1, 'maxlength' => '100'])
            ->addPostObject('slider', [
                'label' => 'Slider',
                'instructions' => '',
                'required' => 1,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['solutions'],
                'taxonomy' => [],
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'object',
                'ui' => 0,
            ]);

        return $sliderSolutions->build();
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
