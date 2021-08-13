<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation;

use WBW\Library\Validation\API\RuleSetInterface;
use WBW\Library\Validation\API\ValidatorInterface;

/**
 * Abstract validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation
 * @abstract
 */
abstract class AbstractValidator implements ValidatorInterface {

    /**
     * Rule set.
     *
     * @var RuleSetInterface
     */
    private $ruleSet;

    /**
     * Constructor.
     *
     * @param RuleSetInterface $ruleSet The rule set.
     */
    protected function __construct(RuleSetInterface $ruleSet) {
        $this->setRuleSet($ruleSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleSet(): RuleSetInterface {
        return $this->ruleSet;
    }

    /**
     * Set the rule set.
     *
     * @param RuleSetInterface $ruleSet The rule set.
     * @return ValidatorInterface Returns this validator.
     */
    protected function setRuleSet(RuleSetInterface $ruleSet): ValidatorInterface {
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
