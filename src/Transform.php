<?php
/**
 * Base class for all transforms.
 *
 * Transform is a visitor to transform mapped database data.
 * It can be used to transform smiles, images etc. format into
 * one suitable for target CMS needs.
 */

namespace udumpparser;

use KoKoKo\assert\Assert;

abstract class Transform
{
    public function __construct($options = [])
    {
        Assert::assert($options, 'options')->isArray();

        foreach ($options as $option => $value) {
            $this->$option = $value;
        }
    }

    /**
     * @param  string $field the key of field to transform
     *
     * @return bool returns true if field is accepted by this transformation
     */
    abstract public function canAccept($field);

    /**
     * @param  string $field    the key of field to transform
     * @param  array  $fields fields array. Should be passed by reference and mutated
     */
    abstract public function visit($field, &$fields, $scheme);
}
