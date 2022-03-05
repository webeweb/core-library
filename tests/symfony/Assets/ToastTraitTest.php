<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestToastTrait;

/**
 * Toast trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class ToastTraitTest extends AbstractTestCase {

    /**
     * Tests setToast()
     *
     * @return void
     */
    public function testSetToast(): void {

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        $obj = new TestToastTrait();

        $obj->setToast($toast);
        $this->assertSame($toast, $obj->getToast());
    }
}
