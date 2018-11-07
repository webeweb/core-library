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
use WBW\Library\Core\Quadratus\Model\QPaie\TauxAT;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Taux a t model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class TauxATTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TauxAT();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCodeAT());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRisque());
        $this->assertNull($obj->getSection());
        $this->assertNull($obj->getTaux());
    }

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     */
    public function testSetAPartirDe() {

        $obj = new TauxAT();

        $obj->setAPartirDe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAPartirDe());
    }

    /**
     * Tests the setBureau() method.
     *
     * @return void
     */
    public function testSetBureau() {

        $obj = new TauxAT();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests the setCodeAT() method.
     *
     * @return void
     */
    public function testSetCodeAT() {

        $obj = new TauxAT();

        $obj->setCodeAT(10);
        $this->assertEquals(10, $obj->getCodeAT());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new TauxAT();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setRisque() method.
     *
     * @return void
     */
    public function testSetRisque() {

        $obj = new TauxAT();

        $obj->setRisque("risque");
        $this->assertEquals("risque", $obj->getRisque());
    }

    /**
     * Tests the setSection() method.
     *
     * @return void
     */
    public function testSetSection() {

        $obj = new TauxAT();

        $obj->setSection("section");
        $this->assertEquals("section", $obj->getSection());
    }

    /**
     * Tests the setTaux() method.
     *
     * @return void
     */
    public function testSetTaux() {

        $obj = new TauxAT();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

}
