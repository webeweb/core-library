<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChargesPaie;

/**
 * Charges paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChargesPaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChargesPaie();

        $this->assertNull($obj->getArbitrage());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getBrutAnl());
        $this->assertNull($obj->getChargesPatronales());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getHeuresSup());
        $this->assertNull($obj->getImpos());
        $this->assertNull($obj->getIndemniteCp());
        $this->assertNull($obj->getIndemnitePrecarite());
        $this->assertNull($obj->getInteressement());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHBase());
        $this->assertNull($obj->getNbHn());
        $this->assertNull($obj->getNbHRc());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHt());
        $this->assertNull($obj->getParticipation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProvisionCp());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSalaire());
        $this->assertNull($obj->getTotRet());
        $this->assertNull($obj->getTrA());
        $this->assertNull($obj->getTrB());
        $this->assertNull($obj->getTrC());
        $this->assertNull($obj->getTxHn());
    }
}
