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
use WBW\Library\Core\Quadratus\Model\Proprete\AvenantsPrepares;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Avenants prepares model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class AvenantsPreparesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AvenantsPrepares();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContinuerVerif());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getTypeDocument());
    }

    /**
     * Tests the setChrono() method.
     *
     * @return void
     */
    public function testSetChrono() {

        $obj = new AvenantsPrepares();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AvenantsPrepares();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setContinuerVerif() method.
     *
     * @return void
     */
    public function testSetContinuerVerif() {

        $obj = new AvenantsPrepares();

        $obj->setContinuerVerif(true);
        $this->assertEquals(true, $obj->getContinuerVerif());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new AvenantsPrepares();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new AvenantsPrepares();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AvenantsPrepares();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setTypeDocument() method.
     *
     * @return void
     */
    public function testSetTypeDocument() {

        $obj = new AvenantsPrepares();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

}
