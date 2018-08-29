<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validation\API;

/**
 * Validation rule interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\API
 */
interface ValidationRuleInterface {

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName();

    /**
     * Determines if an object is valid.
     *
     * @return ValidationStatusInterface Returns the validation status.
     */
    public function isValid($object);
}
