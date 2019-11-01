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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFngsNonPercueMotifTrait;

/**
 * F n g s non percue motif trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFngsNonPercueMotifTraitTest extends AbstractTestCase {

    /**
     * Tests the setFngsNonPercueMotif() method.
     *
     * @return void
     */
    public function testSetFngsNonPercueMotif() {

        $obj = new TestStringFngsNonPercueMotifTrait();

        $obj->setFngsNonPercueMotif("fngsNonPercueMotif");
        $this->assertEquals("fngsNonPercueMotif", $obj->getFngsNonPercueMotif());
    }
}
