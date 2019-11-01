<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSaveHistoMemo2FileTrait;

/**
 * Save histo memo2 file trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSaveHistoMemo2FileTraitTest extends AbstractTestCase {

    /**
     * Tests the setSaveHistoMemo2File() method.
     *
     * @return void
     */
    public function testSetSaveHistoMemo2File() {

        $obj = new TestBoolSaveHistoMemo2FileTrait();

        $obj->setSaveHistoMemo2File(true);
        $this->assertEquals(true, $obj->getSaveHistoMemo2File());
    }
}
