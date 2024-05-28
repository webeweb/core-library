<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Validator;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRule;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRuleSet;
use WBW\Library\Common\Validator\RuleSetInterface;
use WBW\Library\Common\Validator\StatusInterface;

/**
 * Abstract rule set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class AbstractRuleSetTest extends AbstractTestCase {

    /**
     * Test removeRule()
     *
     * @return void
     */
    public function testRemoveRule(): void {

        // Set a Rule mock.
        $rule = new TestAbstractRule();

        $obj = new TestAbstractRuleSet();

        $this->assertSame($obj, $obj->addRule($rule));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule(new TestAbstractRule()));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule($rule));
        $this->assertCount(0, $obj->getRules());
    }

    /**
     * Test validate()
     *
     * @return void
     */
    public function testValidate(): void {

        // Set a Rule mock.
        $rule = new TestAbstractRule();
        $rule->setNameAsNull();

        $obj = new TestAbstractRuleSet();
        $obj->addRule($rule);

        $res = $obj->validate(new TestAbstractRule());
        $this->assertCount(1, $res);

        $this->assertInstanceOf(StatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
        $this->assertNull($res[0]->getRuleName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractRuleSet();

        $this->assertInstanceOf(RuleSetInterface::class, $obj);

        $this->assertEquals([], $obj->getRules());
    }
}
