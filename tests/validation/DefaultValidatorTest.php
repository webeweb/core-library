<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation\Tests;

use WBW\Library\Validation\API\RuleSetInterface;
use WBW\Library\Validation\API\StatusInterface;
use WBW\Library\Validation\DefaultValidator;
use WBW\Library\Validation\RuleSet\DefaultRuleSet;
use WBW\Library\Validation\Tests\Fixtures\Rule\TestRule;

/**
 * Default validator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation\Tests\Validation
 */
class DefaultValidatorTest extends AbstractTestCase {

    /**
     * Rule set.
     *
     * @var RuleSetInterface
     */
    private $ruleSet;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Rule mock.
        $rule = new TestRule();

        // Set a Rule set mock.
        $this->ruleSet = new DefaultRuleSet();
        $this->ruleSet->addRule($rule);
    }

    /**
     * Tests the validate() method.
     *
     * @return void
     */
    public function testValidate(): void {

        $obj = new DefaultValidator($this->ruleSet);

        $res = $obj->validate(new TestRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(StatusInterface::class, $res[0]);
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
