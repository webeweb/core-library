<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Tests\Rule;

use WBW\Library\Validator\Tests\AbstractTestCase;
use WBW\Library\Validator\Tests\Fixtures\Rule\TestRule;

/**
 * Abstract rule test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Tests\Rule
 */
class AbstractRuleTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestRule();

        $this->assertEquals("Test rule", $obj->getName());
    }
}
