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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TempsPrevisionnelsTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAvenant() method.
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCoutHoraire() method.
     *
     * @return void
     */
    public function testSetCoutHoraire(): void {

        $obj = new TempsPrevisionnels();

        $obj->setCoutHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutHoraire());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new TempsPrevisionnels();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests the __construct() method.
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
