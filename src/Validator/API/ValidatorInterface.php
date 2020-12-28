<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator\API;

/**
 * Validator interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator\API
 */
interface ValidatorInterface {

    /**
     * Get the rule set.
     *
     * @return ValidationRuleSetInterface Returns the validation rule set.
     */
    public function getRuleSet(): ValidationRuleSetInterface;

    /**
     * Validate.
     *
     * @param mixed $object The object.
     * @return ValidationStatusInterface[] Returns the validation status.
     */
    public function validate($object): array;
}
