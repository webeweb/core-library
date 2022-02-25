<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\TempsPrevisionnels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Temps previsionnels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TempsPrevisionnelsTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAvenant()
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCoutHoraire()
     *
     * @return void
     */
    public function testSetCoutHoraire(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCoutHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutHoraire());
    }

    /**
     * Tests setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new TempsPrevisionnels();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TempsPrevisionnels();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCoutHoraire());
        $this->assertNull($obj->getNbHeures());
    }
}
