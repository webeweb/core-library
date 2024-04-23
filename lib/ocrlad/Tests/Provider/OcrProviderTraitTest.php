<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\OcrLad\Provider\OcrProvider;
use WBW\Library\OcrLad\Tests\AbstractTestCase;
use WBW\Library\OcrLad\Tests\Fixtures\Provider\TestOcrProviderTrait;

/**
 * OCR provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Provider
 */
class OcrProviderTraitTest extends AbstractTestCase {

    /**
     * Test setOcrProvider()
     *
     * @return void
     */
    public function testSetOcrProvider(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set an OCR provider mock.
        $ocrProvider = new OcrProvider($logger);

        $obj = new TestOcrProviderTrait();

        $obj->setOcrProvider($ocrProvider);
        $this->assertSame($ocrProvider, $obj->getOcrProvider());
    }
}
