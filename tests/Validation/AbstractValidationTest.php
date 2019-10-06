<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\Tests\Fixtures\Validation\Rule\TestValidationRule;
use WBW\Library\Core\Validation\API\ValidationRuleInterface;
use WBW\Library\Core\Validation\API\ValidationRuleSetInterface;
use WBW\Library\Core\Validation\RuleSet\DefaultValidationRuleSet;

/**
 * Abstract validation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation
 * @abstract
 */
abstract class AbstractValidationTest extends AbstractFrameworkTestCase {

    /**
     * Rule.
     *
     * @var ValidationRuleInterface
     */
    protected $rule;

    /**
     * Rule set.
     *
     * @var ValidationRuleSetInterface
     */
    protected $ruleSet;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Validation rule mock.
        $this->rule = new TestValidationRule();

        // Set a Validation rule set mock.
        $this->ruleSet = new DefaultValidationRuleSet();
        $this->ruleSet->addRule($this->rule);
    }

}
