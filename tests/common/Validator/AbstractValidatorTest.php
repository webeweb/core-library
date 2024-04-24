<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Validator;

use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRule;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRuleSet;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractValidator;
use WBW\Library\Common\Validator\RuleSetInterface;
use WBW\Library\Common\Validator\StatusInterface;
use WBW\Library\Common\Validator\ValidatorInterface;
use WBW\Library\Validator\Tests\AbstractTestCase;

/**
 * Abstract validator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class AbstractValidatorTest extends AbstractTestCase {

    /**
     * Rule set.
     *
     * @var RuleSetInterface|null
     */
    private $ruleSet;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Rule mock.
        $rule = new TestAbstractRule();

        // Set a Rule set mock.
        $this->ruleSet = new TestAbstractRuleSet();
        $this->ruleSet->addRule($rule);
    }

    /**
     * Test validate()
     *
     * @return void
     */
    public function testValidate(): void {

        $obj = new TestAbstractValidator($this->ruleSet);

        $res = $obj->validate(new TestAbstractRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(StatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractValidator($this->ruleSet);

        $this->assertInstanceOf(ValidatorInterface::class, $obj);

        $this->assertSame($this->ruleSet, $obj->getRuleSet());
    }
}
