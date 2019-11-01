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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauConfTrait;

/**
 * Niveau conf trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauConfTraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauConf() method.
     *
     * @return void
     */
    public function testSetNiveauConf() {

        $obj = new TestStringNiveauConfTrait();

        $obj->setNiveauConf("niveauConf");
        $this->assertEquals("niveauConf", $obj->getNiveauConf());
    }
}
