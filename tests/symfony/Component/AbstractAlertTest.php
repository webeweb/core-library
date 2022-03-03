<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component;

use WBW\Library\Symfony\Component\AlertInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Component\TestAlert;

/**
 * Abstract alert test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class AbstractAlertTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAlert("danger");

        $this->assertInstanceOf(AlertInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());
    }
}
