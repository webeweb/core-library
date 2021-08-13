<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation\Tests\RuleSet;

use WBW\Library\Validation\API\StatusInterface;
use WBW\Library\Validation\RuleSet\DefaultRuleSet;
use WBW\Library\Validation\Tests\AbstractTestCase;
use WBW\Library\Validation\Tests\Fixtures\Rule\TestRule;

/**
 * Default rule set test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation\Tests\Validation\RuleSet
 */
class DefaultRuleSetTest extends AbstractTestCase {

    /**
     * Tests the removeRule() method.
     *
     * @return void
     */
    public function testRemoveRule(): void {

        $obj = new DefaultRuleSet();

        $arg = new TestRule();

        $this->assertSame($obj, $obj->addRule($arg));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule(new TestRule()));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule($arg));
        $this->assertCount(0, $obj->getRules());
    }

    /**
     * Tests the validate() method.
     *
     * @return void
     */
    public function testValidate(): void {

        $obj = new DefaultRuleSet();
        $obj->addRule(new TestRule());

        $res = $obj->validate(new TestRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(StatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
        $this->assertEquals("Test rule", $res[0]->getRuleName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultRuleSet();

        $this->assertEquals([], $obj->getRules());
    }
}
