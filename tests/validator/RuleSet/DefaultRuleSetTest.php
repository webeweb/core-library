<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Tests\RuleSet;

use WBW\Library\Validator\Api\StatusInterface;
use WBW\Library\Validator\RuleSet\DefaultRuleSet;
use WBW\Library\Validator\Tests\AbstractTestCase;
use WBW\Library\Validator\Tests\Fixtures\Rule\TestRule;

/**
 * Default rule set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Tests\Validator\RuleSet
 */
class DefaultRuleSetTest extends AbstractTestCase {

    /**
     * Tests removeRule()
     *
     * @return void
     */
    public function testRemoveRule(): void {

        // Set a Rule mock.
        $rule = new TestRule();

        $obj = new DefaultRuleSet();

        $this->assertSame($obj, $obj->addRule($rule));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule(new TestRule()));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule($rule));
        $this->assertCount(0, $obj->getRules());
    }

    /**
     * Tests validate()
     *
     * @return void
     */
    public function testValidate(): void {

        // Set a Rule mock.
        $rule = new TestRule();
        $rule->setName(null);

        $obj = new DefaultRuleSet();
        $obj->addRule($rule);

        $res = $obj->validate(new TestRule());
        $this->assertCount(1, $res);

        $this->assertInstanceOf(StatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
        $this->assertNull($res[0]->getRuleName());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultRuleSet();

        $this->assertEquals([], $obj->getRules());
    }
}
