<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsTypesEnvois;

/**
 * Liaisons types envois model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsTypesEnvoisTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LiaisonsTypesEnvois();

        $this->assertNull($obj->getABloquer());
        $this->assertNull($obj->getAEmettre());
        $this->assertNull($obj->getAccepteDepuisQBureau());
        $this->assertNull($obj->getAccepteDepuisQC());
        $this->assertNull($obj->getAccepteDepuisQP());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getModifiable());
        $this->assertNull($obj->getSansImages());
    }

    /**
     * Tests the setABloquer() method.
     *
     * @return void
     */
    public function testSetABloquer() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setABloquer("aBloquer");
        $this->assertEquals("aBloquer", $obj->getABloquer());
    }

    /**
     * Tests the setAEmettre() method.
     *
     * @return void
     */
    public function testSetAEmettre() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAEmettre("aEmettre");
        $this->assertEquals("aEmettre", $obj->getAEmettre());
    }

    /**
     * Tests the setAccepteDepuisQBureau() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQBureau() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQBureau(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQBureau());
    }

    /**
     * Tests the setAccepteDepuisQC() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQC() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQC(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQC());
    }

    /**
     * Tests the setAccepteDepuisQP() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQP() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQP(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQP());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setModifiable() method.
     *
     * @return void
     */
    public function testSetModifiable() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setModifiable(true);
        $this->assertEquals(true, $obj->getModifiable());
    }

    /**
     * Tests the setSansImages() method.
     *
     * @return void
     */
    public function testSetSansImages() {

        $obj = new LiaisonsTypesEnvois();

        $obj->setSansImages(true);
        $this->assertEquals(true, $obj->getSansImages());
    }
}
