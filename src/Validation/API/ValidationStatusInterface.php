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
 * Validation status interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\API
 */
interface ValidationStatusInterface {

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode();

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage();

    /**
     * Get the rule name.
     *
     * @return string Returns the rule name.
     */
    public function getRuleName();

    /**
     * Set the rule name.
     *
     * @param string $ruleName The rule name.
     * @return ValidationStatusInterface Returns this validation status.
     */
    public function setRuleName($ruleName);
}
