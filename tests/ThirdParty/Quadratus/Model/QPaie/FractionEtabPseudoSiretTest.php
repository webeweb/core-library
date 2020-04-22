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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\FractionEtabPseudoSiret;

/**
 * Fraction etab pseudo siret test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class FractionEtabPseudoSiretTest extends AbstractTestCase {

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe() {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new FractionEtabPseudoSiret();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new FractionEtabPseudoSiret();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setNumFraction() method.
     *
     * @return void
     */
    public function testSetNumFraction() {

        $obj = new FractionEtabPseudoSiret();

        $obj->setNumFraction("numFraction");
        $this->assertEquals("numFraction", $obj->getNumFraction());
    }

    /**
     * Tests the setPseudoSiret() method.
     *
     * @return void
     */
    public function testSetPseudoSiret() {

        $obj = new FractionEtabPseudoSiret();

        $obj->setPseudoSiret("pseudoSiret");
        $this->assertEquals("pseudoSiret", $obj->getPseudoSiret());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new FractionEtabPseudoSiret();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getNumFraction());
        $this->assertNull($obj->getPseudoSiret());
    }
}
