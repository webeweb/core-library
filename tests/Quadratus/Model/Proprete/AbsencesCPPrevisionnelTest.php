<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\AbsencesCPPrevisionnel;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Absences c p previsionnel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class AbsencesCPPrevisionnelTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCPPrevisionnel();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebutCP());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getDateEtatCP());
        $this->assertNull($obj->getDateFinCP());
        $this->assertNull($obj->getDepuisWeb());
        $this->assertNull($obj->getEtatCP());
        $this->assertNull($obj->getIndice());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateDebutCP() method.
     *
     * @return void
     */
    public function testSetDateDebutCP() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setDateDebutCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutCP());
    }

    /**
     * Tests the setDateDemande() method.
     *
     * @return void
     */
    public function testSetDateDemande() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setDateDemande(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDemande());
    }

    /**
     * Tests the setDateEtatCP() method.
     *
     * @return void
     */
    public function testSetDateEtatCP() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setDateEtatCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEtatCP());
    }

    /**
     * Tests the setDateFinCP() method.
     *
     * @return void
     */
    public function testSetDateFinCP() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setDateFinCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinCP());
    }

    /**
     * Tests the setDepuisWeb() method.
     *
     * @return void
     */
    public function testSetDepuisWeb() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setDepuisWeb(true);
        $this->assertEquals(true, $obj->getDepuisWeb());
    }

    /**
     * Tests the setEtatCP() method.
     *
     * @return void
     */
    public function testSetEtatCP() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setEtatCP("etatCP");
        $this->assertEquals("etatCP", $obj->getEtatCP());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new AbsencesCPPrevisionnel();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

}
