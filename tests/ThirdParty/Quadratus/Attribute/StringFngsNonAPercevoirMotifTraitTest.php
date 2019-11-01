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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFngsNonAPercevoirMotifTrait;

/**
 * F n g s non a percevoir motif trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFngsNonAPercevoirMotifTraitTest extends AbstractTestCase {

    /**
     * Tests the setFngsNonAPercevoirMotif() method.
     *
     * @return void
     */
    public function testSetFngsNonAPercevoirMotif() {

        $obj = new TestStringFngsNonAPercevoirMotifTrait();

        $obj->setFngsNonAPercevoirMotif("fngsNonAPercevoirMotif");
        $this->assertEquals("fngsNonAPercevoirMotif", $obj->getFngsNonAPercevoirMotif());
    }
}
