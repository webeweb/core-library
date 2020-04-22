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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AffectationEmployeChantier;

/**
 * Affectation employe chantier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationEmployeChantierTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateAffectation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAffectation() {

        // Set a Date/time mock.
        $dateAffectation = new DateTime("2018-09-10");

        $obj = new AffectationEmployeChantier();

        $obj->setDateAffectation($dateAffectation);
        $this->assertSame($dateAffectation, $obj->getDateAffectation());
    }

    /**
     * Tests the setDateFinAffectation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAffectation() {

        // Set a Date/time mock.
        $dateFinAffectation = new DateTime("2018-09-10");

        $obj = new AffectationEmployeChantier();

        $obj->setDateFinAffectation($dateFinAffectation);
        $this->assertSame($dateFinAffectation, $obj->getDateFinAffectation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AffectationEmployeChantier();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateAffectation());
        $this->assertNull($obj->getDateFinAffectation());
    }
}
