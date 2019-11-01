<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ChargesARepartirLignes;

/**
 * Charges a repartir lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesARepartirLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChargesARepartirLignes();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getMontantRestant());
        $this->assertNull($obj->getMontantVir());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptCar());
        $this->assertNull($obj->getNumLigne());
    }
}
