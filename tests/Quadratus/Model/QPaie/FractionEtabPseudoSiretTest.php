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
use WBW\Library\Core\Quadratus\Model\QPaie\FractionEtabPseudoSiret;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fraction etab pseudo siret model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class FractionEtabPseudoSiretTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FractionEtabPseudoSiret();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getNumFraction());
        $this->assertNull($obj->getPseudoSiret());
    }

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     */
    public function testSetAPartirDe() {

        $obj = new FractionEtabPseudoSiret();

        $obj->setAPartirDe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAPartirDe());
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

}
