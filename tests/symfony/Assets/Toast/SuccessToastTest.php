<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Toast;

use WBW\Library\Symfony\Assets\Toast\SuccessToast;
use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Success toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Toast
 */
class SuccessToastTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessToast("success");

        $this->assertEquals(ToastInterface::TOAST_TYPE_SUCCESS, $obj->getType());
        $this->assertEquals("success", $obj->getContent());
    }
}
