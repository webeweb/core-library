<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component\Toast;

use JsonSerializable;
use WBW\Library\Widget\Component\Toast\DefaultToast;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Default toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\Toast
 */
class DefaultToastTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultToast("type", "default");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ToastInterface::class, $obj);

        $this->assertEquals("type", $obj->getType());
        $this->assertEquals("default", $obj->getContent());
    }
}
