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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesCpPrevisionnel;

/**
 * Absences cp previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevisionnelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCpPrevisionnel();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebutCp());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getDateEtatCp());
        $this->assertNull($obj->getDateFinCp());
        $this->assertNull($obj->getDepuisWeb());
        $this->assertNull($obj->getEtatCp());
        $this->assertNull($obj->getIndice());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateDebutCp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutCp() {

        // Set a Date/time mock.
        $dateDebutCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateDebutCp($dateDebutCp);
        $this->assertSame($dateDebutCp, $obj->getDateDebutCp());
    }

    /**
     * Tests the setDateDemande() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDemande() {

        // Set a Date/time mock.
        $dateDemande = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateDemande($dateDemande);
        $this->assertSame($dateDemande, $obj->getDateDemande());
    }

    /**
     * Tests the setDateEtatCp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEtatCp() {

        // Set a Date/time mock.
        $dateEtatCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateEtatCp($dateEtatCp);
        $this->assertSame($dateEtatCp, $obj->getDateEtatCp());
    }

    /**
     * Tests the setDateFinCp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinCp() {

        // Set a Date/time mock.
        $dateFinCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateFinCp($dateFinCp);
        $this->assertSame($dateFinCp, $obj->getDateFinCp());
    }

    /**
     * Tests the setDepuisWeb() method.
     *
     * @return void
     */
    public function testSetDepuisWeb() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDepuisWeb(true);
        $this->assertEquals(true, $obj->getDepuisWeb());
    }

    /**
     * Tests the setEtatCp() method.
     *
     * @return void
     */
    public function testSetEtatCp() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setEtatCp("etatCp");
        $this->assertEquals("etatCp", $obj->getEtatCp());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }
}
