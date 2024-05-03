<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Traits\Integers;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Integers\TestIntegerIdDocumentProductSheetTrait;

/**
 * String id document product sheet trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class IntegerIdDocumentProductSheetTraitTest extends AbstractTestCase {

    /**
     * Test setIdSite()
     *
     * @return void
     */
    public function testSetIdSite(): void {

        $obj = new TestIntegerIdDocumentProductSheetTrait();

        $obj->setIdDocumentProductSheet(1);
        $this->assertEquals(1, $obj->getIdDocumentProductSheet());
    }
}