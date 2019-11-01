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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAutresSommesExoCode1Trait;

/**
 * Autres sommes exo_ code1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAutresSommesExoCode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAutresSommesExoCode1() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoCode1() {

        $obj = new TestStringAutresSommesExoCode1Trait();

        $obj->setAutresSommesExoCode1("autresSommesExoCode1");
        $this->assertEquals("autresSommesExoCode1", $obj->getAutresSommesExoCode1());
    }
}
