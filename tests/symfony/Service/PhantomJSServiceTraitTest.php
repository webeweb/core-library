<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Service;

use WBW\Library\Symfony\Service\PhantomJSService;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Service\TestPhantomJSServiceTrait;

/**
 * PhantomJS service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class PhantomJSServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setPhantomJSService()
     *
     * @return void
     */
    public function testSetPhantomJSService(): void {

        // Set a PhantomJS service mock.
        $phantomJSService = $this->getMockBuilder(PhantomJSService::class)->disableOriginalConstructor()->getMock();

        $obj = new TestPhantomJSServiceTrait();

        $obj->setPhantomJSService($phantomJSService);
        $this->assertSame($phantomJSService, $obj->getPhantomJSService());
    }
}
