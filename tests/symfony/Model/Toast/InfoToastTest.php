<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model\Toast;

use WBW\Library\Symfony\Model\Toast\InfoToast;
use WBW\Library\Symfony\Model\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Info toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model\Toast
 */
class InfoToastTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfoToast("info");

        $this->assertEquals(ToastInterface::TOAST_INFO, $obj->getType());
        $this->assertEquals("info", $obj->getContent());
    }
}
