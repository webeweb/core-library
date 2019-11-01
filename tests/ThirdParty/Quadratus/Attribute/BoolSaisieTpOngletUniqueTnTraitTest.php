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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSaisieTpOngletUniqueTnTrait;

/**
 * Saisie t p_ onglet unique t n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSaisieTpOngletUniqueTnTraitTest extends AbstractTestCase {

    /**
     * Tests the setSaisieTpOngletUniqueTn() method.
     *
     * @return void
     */
    public function testSetSaisieTpOngletUniqueTn() {

        $obj = new TestBoolSaisieTpOngletUniqueTnTrait();

        $obj->setSaisieTpOngletUniqueTn(true);
        $this->assertEquals(true, $obj->getSaisieTpOngletUniqueTn());
    }
}
