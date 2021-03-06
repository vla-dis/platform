<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Orchid\Screen\Field;

/**
 * Class MapField.
 *
 * @method $this accept($value = true)
 * @method $this accesskey($value = true)
 * @method $this autocomplete($value = true)
 * @method $this autofocus($value = true)
 * @method $this checked($value = true)
 * @method $this disabled($value = true)
 * @method $this form($value = true)
 * @method $this formaction($value = true)
 * @method $this formenctype($value = true)
 * @method $this formmethod($value = true)
 * @method $this formnovalidate($value = true)
 * @method $this formtarget($value = true)
 * @method $this list($value = true)
 * @method $this max($value = true)
 * @method $this maxlength($value = true)
 * @method $this min($value = true)
 * @method $this multiple($value = true)
 * @method $this name($value = true)
 * @method $this pattern($value = true)
 * @method $this placeholder(string $value = null)
 * @method $this readonly($value = true)
 * @method $this required($value = true)
 * @method $this size($value = true)
 * @method $this src($value = true)
 * @method $this step($value = true)
 * @method $this tabindex($value = true)
 * @method $this type($value = true)
 * @method $this value($value = true)
 * @method $this help(string $value = null)
 * @method $this popover(string $value = null)
 * @method $this zoom($value = true)
 * @method $this height($value = '300px')
 */
class MapField extends Field
{
    /**
     * @var string
     */
    public $view = 'platform::fields.map';

    /**
     * Default attributes value.
     *
     * @var array
     */
    public $attributes = [
        'zoom'   => 14,
        'height' => '300px',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    public $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'list',
        'max',
        'maxlength',
        'min',
        'multiple',
        'name',
        'pattern',
        'placeholder',
        'readonly',
        'required',
        'size',
        'src',
        'step',
        'tabindex',
        'type',
        'value',
        'height',
    ];

    /**
     * @param null $name
     *
     * @return PlaceField
     */
    public static function make($name = null): self
    {
        return (new static)->name($name);
    }
}
