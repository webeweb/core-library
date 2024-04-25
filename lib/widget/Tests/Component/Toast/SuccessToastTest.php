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
use WBW\Library\Widget\Component\Toast\SuccessToast;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Success toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Toast
 */
class SuccessToastTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessToast("success");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ToastInterface::class, $obj);

        $this->assertEquals(ToastInterface::TOAST_TYPE_SUCCESS, $obj->getType());
        $this->assertEquals("success", $obj->getContent());
    }
}
