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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringReferenceFacture2Trait;

/**
 * Reference facture2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringReferenceFacture2TraitTest extends AbstractTestCase {

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2() {

        $obj = new TestStringReferenceFacture2Trait();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }
}
