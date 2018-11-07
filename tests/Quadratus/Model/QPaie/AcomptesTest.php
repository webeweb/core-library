<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\Acomptes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Acomptes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AcomptesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Acomptes();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getEnEuro());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPaye());
        $this->assertNull($obj->getTypePaiement());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Acomptes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new Acomptes();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setCongesPayes() method.
     *
     * @return void
     */
    public function testSetCongesPayes() {

        $obj = new Acomptes();

        $obj->setCongesPayes(true);
        $this->assertEquals(true, $obj->getCongesPayes());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate() {

        $obj = new Acomptes();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     */
    public function testSetDateAdded() {

        $obj = new Acomptes();

        $obj->setDateAdded(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdded());
    }

    /**
     * Tests the setDateAddedColl() method.
     *
     * @return void
     */
    public function testSetDateAddedColl() {

        $obj = new Acomptes();

        $obj->setDateAddedColl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAddedColl());
    }

    /**
     * Tests the setEnEuro() method.
     *
     * @return void
     */
    public function testSetEnEuro() {

        $obj = new Acomptes();

        $obj->setEnEuro(true);
        $this->assertEquals(true, $obj->getEnEuro());
    }

    /**
     * Tests the setInBul() method.
     *
     * @return void
     */
    public function testSetInBul() {

        $obj = new Acomptes();

        $obj->setInBul(true);
        $this->assertEquals(true, $obj->getInBul());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Acomptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new Acomptes();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new Acomptes();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new Acomptes();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPaye() method.
     *
     * @return void
     */
    public function testSetPaye() {

        $obj = new Acomptes();

        $obj->setPaye(true);
        $this->assertEquals(true, $obj->getPaye());
    }

    /**
     * Tests the setTypePaiement() method.
     *
     * @return void
     */
    public function testSetTypePaiement() {

        $obj = new Acomptes();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

}
