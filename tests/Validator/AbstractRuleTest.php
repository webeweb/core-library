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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRule;
use WBW\Library\Common\Validator\RuleInterface;

/**
 * Abstract rule test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class AbstractRuleTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractRule();

        $this->assertInstanceOf(RuleInterface::class, $obj);

        $this->assertEquals("test", $obj->getName());
    }
}
