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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EmpruntsLignes;

/**
 * Emprunts lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EmpruntsLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpruntsLignes();

        $this->assertNull($obj->getDateRemboursement());
        $this->assertNull($obj->getDontAssurance());
        $this->assertNull($obj->getDontCapital());
        $this->assertNull($obj->getDontInteret());
        $this->assertNull($obj->getMontantRembour());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRestantDuAvant());
        $this->assertNull($obj->getTauxLigne());
    }
}
