<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validator;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Validator\Rule\TestValidationRule;
use WBW\Library\Core\Validator\API\ValidationRuleSetInterface;
use WBW\Library\Core\Validator\API\ValidationStatusInterface;
use WBW\Library\Core\Validator\DefaultValidator;
use WBW\Library\Core\Validator\RuleSet\DefaultValidationRuleSet;

/**
 * Default validator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation
 */
class DefaultValidatorTest extends AbstractTestCase {

    /**
     * Rule set.
     *
     * @var ValidationRuleSetInterface
     */
    private $ruleSet;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Validation rule mock.
        $rule = new TestValidationRule();

        // Set a Validation rule set mock.
        $this->ruleSet = new DefaultValidationRuleSet();
        $this->ruleSet->addRule($rule);
    }

    /**
     * Tests the validate() method.
     *
     * @return void
     */
    public function testValidate(): void {

        $obj = new DefaultValidator($this->ruleSet);

        $res = $obj->validate(new TestValidationRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(ValidationStatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultValidator($this->ruleSet);

        $this->assertSame($this->ruleSet, $obj->getRuleSet());
    }
}
