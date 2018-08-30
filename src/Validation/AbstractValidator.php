<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validation;

use WBW\Library\Core\Validation\API\ValidationRuleSetInterface;
use WBW\Library\Core\Validation\API\ValidatorInterface;

/**
 * Abstract validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation
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
     * {@inheritdoc}
     */
    public function getRuleSet() {
        return $this->ruleSet;
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($object) {
        return $this->ruleSet->isValid($object);
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

}
