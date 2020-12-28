<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator;

use WBW\Library\Core\Validator\API\ValidationRuleSetInterface;
use WBW\Library\Core\Validator\API\ValidatorInterface;

/**
 * Abstract validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator
 * @abstract
 */
abstract class AbstractValidator implements ValidatorInterface {

    /**
     * Rule set.
     *
     * @var ValidationRuleSetInterface
     */
    private $ruleSet;

    /**
     * Constructor.
     *
     * @param ValidationRuleSetInterface $ruleSet The rule set.
     */
    protected function __construct(ValidationRuleSetInterface $ruleSet) {
        $this->setRuleSet($ruleSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleSet(): ValidationRuleSetInterface {
        return $this->ruleSet;
    }

    /**
     * Set the rule set.
     *
     * @param ValidationRuleSetInterface $ruleSet The rule set.
     * @return ValidatorInterface Returns this validator.
     */
    protected function setRuleSet(ValidationRuleSetInterface $ruleSet) {
        $this->ruleSet = $ruleSet;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function validate($object): array {
        return $this->ruleSet->validate($object);
    }
}
