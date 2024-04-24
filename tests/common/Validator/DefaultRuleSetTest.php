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

use WBW\Library\Common\Validator\DefaultRuleSet;
use WBW\Library\Common\Validator\RuleSetInterface;
use WBW\Library\Validator\Tests\AbstractTestCase;

/**
 * Default rule set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class DefaultRuleSetTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultRuleSet();

        $this->assertInstanceOf(RuleSetInterface::class, $obj);

        $this->assertEquals([], $obj->getRules());
    }
}
