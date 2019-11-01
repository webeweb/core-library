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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAutresSommesExoCode3Trait;

/**
 * Autres sommes exo_ code3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAutresSommesExoCode3TraitTest extends AbstractTestCase {

    /**
     * Tests the setAutresSommesExoCode3() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoCode3() {

        $obj = new TestStringAutresSommesExoCode3Trait();

        $obj->setAutresSommesExoCode3("autresSommesExoCode3");
        $this->assertEquals("autresSommesExoCode3", $obj->getAutresSommesExoCode3());
    }
}
