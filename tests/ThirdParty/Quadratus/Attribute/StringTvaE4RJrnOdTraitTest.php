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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4RJrnOdTrait;

/**
 * Tva e4 r jrn o d trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4RJrnOdTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4RJrnOd() method.
     *
     * @return void
     */
    public function testSetTvaE4RJrnOd() {

        $obj = new TestStringTvaE4RJrnOdTrait();

        $obj->setTvaE4RJrnOd("tvaE4RJrnOd");
        $this->assertEquals("tvaE4RJrnOd", $obj->getTvaE4RJrnOd());
    }
}
