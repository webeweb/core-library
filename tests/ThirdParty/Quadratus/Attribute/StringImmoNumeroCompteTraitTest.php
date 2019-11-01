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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringImmoNumeroCompteTrait;

/**
 * Immo numero compte trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringImmoNumeroCompteTraitTest extends AbstractTestCase {

    /**
     * Tests the setImmoNumeroCompte() method.
     *
     * @return void
     */
    public function testSetImmoNumeroCompte() {

        $obj = new TestStringImmoNumeroCompteTrait();

        $obj->setImmoNumeroCompte("immoNumeroCompte");
        $this->assertEquals("immoNumeroCompte", $obj->getImmoNumeroCompte());
    }
}
