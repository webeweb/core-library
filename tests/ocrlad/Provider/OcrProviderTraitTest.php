<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Provider;

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
     * Tests setOcrProvider()
     *
     * @return void
     */
    public function testSetOcrProvider(): void {

        // Set an OCR provider mock.
        $ocrProvider = new OcrProvider($this->logger);

        $obj = new TestOcrProviderTrait();

        $obj->setOcrProvider($ocrProvider);
        $this->assertSame($ocrProvider, $obj->getOcrProvider());
    }
}
