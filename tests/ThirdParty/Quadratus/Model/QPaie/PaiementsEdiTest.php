<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\PaiementsEdi;

/**
 * Paiements edi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PaiementsEdiTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PaiementsEdi();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getGenererCouponPaiement());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantDucsAnnuelle());
        $this->assertNull($obj->getMoyenPaiement());
        $this->assertNull($obj->getRib());
    }

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic() {

        $obj = new PaiementsEdi();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new PaiementsEdi();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new PaiementsEdi();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque() {

        $obj = new PaiementsEdi();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests the setGenererCouponPaiement() method.
     *
     * @return void
     */
    public function testSetGenererCouponPaiement() {

        $obj = new PaiementsEdi();

        $obj->setGenererCouponPaiement(true);
        $this->assertEquals(true, $obj->getGenererCouponPaiement());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban() {

        $obj = new PaiementsEdi();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new PaiementsEdi();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontantDucsAnnuelle() method.
     *
     * @return void
     */
    public function testSetMontantDucsAnnuelle() {

        $obj = new PaiementsEdi();

        $obj->setMontantDucsAnnuelle(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantDucsAnnuelle());
    }

    /**
     * Tests the setMoyenPaiement() method.
     *
     * @return void
     */
    public function testSetMoyenPaiement() {

        $obj = new PaiementsEdi();

        $obj->setMoyenPaiement("moyenPaiement");
        $this->assertEquals("moyenPaiement", $obj->getMoyenPaiement());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new PaiementsEdi();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }
}
