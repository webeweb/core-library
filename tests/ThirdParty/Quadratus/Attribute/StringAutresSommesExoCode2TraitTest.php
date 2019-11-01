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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAutresSommesExoCode2Trait;

/**
 * Autres sommes exo_ code2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAutresSommesExoCode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAutresSommesExoCode2() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoCode2() {

        $obj = new TestStringAutresSommesExoCode2Trait();

        $obj->setAutresSommesExoCode2("autresSommesExoCode2");
        $this->assertEquals("autresSommesExoCode2", $obj->getAutresSommesExoCode2());
    }
}
