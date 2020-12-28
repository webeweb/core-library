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
 * Validation rule set interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator\API
 */
interface ValidationRuleSetInterface {

    /**
     * Add a rule.
     *
     * @param ValidationRuleInterface $rule The rule.
     * @return ValidationRuleSetInterface Returns this validation rule set.
     */
    public function addRule(ValidationRuleInterface $rule): ValidationRuleSetInterface;

    /**
     * Get the rules.
     *
     * @return ValidationRuleInterface[] Returns the rules.
     */
    public function getRules(): array;

    /**
     * Remove a rule.
     *
     * @param ValidationRuleInterface $rule The rule.
     * @return ValidationRuleSetInterface Returns this validation rule set.
     */
    public function removeRule(ValidationRuleInterface $rule): ValidationRuleSetInterface;

    /**
     * Validate.
     *
     * @param mixed $object The object.
     * @return ValidationStatusInterface[] Returns the validation status.
     */
    public function validate($object): array;
}
