<?php
/**
 * Removes $CUT$ codes and optionaly splits up MESSAGE
 * into MESSAGE and SNIPPET
 */

namespace udumpparser\transforms;

use udumpparser\Transform;
use udumpparser\ModuleScheme;

class Cut extends Transform
{
    /**
     * @var bool whether to populate SNIPPET with $CUT$ data
     */
    protected $populateSnippet = true;

    public function canAccept($field)
    {
        return $field === ModuleScheme::MESSAGE;
    }

    public function visit($field, &$fields, $scheme)
    {
        if (strpos($fields[$field], '$CUT$') === false) {
            return;
        }

        if ($this->populateSnippet) {
            list(
                $fields[ModuleScheme::SNIPPET],
                $fields[$field]
            ) = explode('$CUT$', $fields[$field]);
        } else {
            $fields[$field] = str_replace('$CUT$', '', $fields[$field]);
        }
    }
}
