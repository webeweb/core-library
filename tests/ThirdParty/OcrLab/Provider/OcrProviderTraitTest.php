<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Provider;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Provider\TestOcrProviderTrait;
use WBW\Library\Core\ThirdParty\OcrLad\Provider\OcrProvider;

/**
 * OCR provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Provider
 */
class OcrProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setOcrProvider() method.
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

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestOcrProviderTrait();

        $this->assertNull($obj->getOcrProvider());
    }
}