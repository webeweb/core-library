<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Enfants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Enfants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EnfantsTest extends AbstractTestCase {

    /**
     * Test setACharge()
     *
     * @return void
     */
    public function testSetACharge(): void {

        $obj = new Enfants();

        $obj->setACharge(true);
        $this->assertTrue($obj->getACharge());
    }

    /**
     * Test setDateNaissance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new Enfants();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new Enfants();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new Enfants();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Enfants();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new Enfants();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new Enfants();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Enfants();

        $this->assertNull($obj->getACharge());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSexe());
    }
}
