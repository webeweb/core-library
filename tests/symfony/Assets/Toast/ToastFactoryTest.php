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

use WBW\Library\Symfony\Assets\Toast\ToastFactory;
use WBW\Library\Symfony\Assets\Toast\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Toast factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Toast
 */
class ToastFactoryTest extends AbstractTestCase {

    /**
     * Tests newDangerToast()
     *
     * @return void
     */
    public function testNewDangerToast(): void {

        $obj = ToastFactory::newDangerToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_DANGER, $obj->getType());
    }

    /**
     * Tests newDefaultToast()
     *
     * @return void
     */
    public function testNewDefaultToast(): void {

        $obj = ToastFactory::newDefaultToast("content", "type");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests newInfoToast()
     *
     * @return void
     */
    public function testNewInfoToast(): void {

        $obj = ToastFactory::newInfoToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_INFO, $obj->getType());
    }

    /**
     * Tests newSuccessToast()
     *
     * @return void
     */
    public function testNewSuccessToast(): void {

        $obj = ToastFactory::newSuccessToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_SUCCESS, $obj->getType());
    }

    /**
     * Tests newWarningToast()
     *
     * @return void
     */
    public function testNewWarningToast(): void {

        $obj = ToastFactory::newWarningToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_WARNING, $obj->getType());
    }
}
