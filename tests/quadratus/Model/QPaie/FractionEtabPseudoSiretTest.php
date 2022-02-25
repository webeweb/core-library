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
use Exception;
use WBW\Library\Quadratus\Model\QPaie\FractionEtabPseudoSiret;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fraction etab pseudo siret test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class FractionEtabPseudoSiretTest extends AbstractTestCase {

    /**
     * Tests setAPartirDe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe(): void {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new FractionEtabPseudoSiret();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new FractionEtabPseudoSiret();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setNumFraction()
     *
     * @return void
     */
    public function testSetNumFraction(): void {

        $obj = new FractionEtabPseudoSiret();

        $obj->setNumFraction("numFraction");
        $this->assertEquals("numFraction", $obj->getNumFraction());
    }

    /**
     * Tests setPseudoSiret()
     *
     * @return void
     */
    public function testSetPseudoSiret(): void {

        $obj = new FractionEtabPseudoSiret();

        $obj->setPseudoSiret("pseudoSiret");
        $this->assertEquals("pseudoSiret", $obj->getPseudoSiret());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FractionEtabPseudoSiret();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getNumFraction());
        $this->assertNull($obj->getPseudoSiret());
    }
}
