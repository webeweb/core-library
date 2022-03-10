<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Toast interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class ToastInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", ToastInterface::TOAST_TYPE_DANGER);
        $this->assertEquals("info", ToastInterface::TOAST_TYPE_INFO);
        $this->assertEquals("success", ToastInterface::TOAST_TYPE_SUCCESS);
        $this->assertEquals("warning", ToastInterface::TOAST_TYPE_WARNING);
    }
}
