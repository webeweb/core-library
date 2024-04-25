<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component\Toast;

use JsonSerializable;
use WBW\Library\Widget\Component\Toast\InfoToast;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Info toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Toast
 */
class InfoToastTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfoToast("info");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ToastInterface::class, $obj);

        $this->assertEquals(ToastInterface::TOAST_TYPE_INFO, $obj->getType());
        $this->assertEquals("info", $obj->getContent());
    }
}
