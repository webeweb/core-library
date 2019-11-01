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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTempsArretTrait;

/**
 * Code temps arret trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTempsArretTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTempsArret() method.
     *
     * @return void
     */
    public function testSetCodeTempsArret() {

        $obj = new TestStringCodeTempsArretTrait();

        $obj->setCodeTempsArret("codeTempsArret");
        $this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
    }
}
