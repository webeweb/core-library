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

use WBW\Library\Quadratus\Model\QGI\LiaisonsTypesEnvois;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons types envois test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsTypesEnvoisTest extends AbstractTestCase {

    /**
     * Tests the setABloquer() method.
     *
     * @return void
     */
    public function testSetABloquer(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setABloquer("aBloquer");
        $this->assertEquals("aBloquer", $obj->getABloquer());
    }

    /**
     * Tests the setAEmettre() method.
     *
     * @return void
     */
    public function testSetAEmettre(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAEmettre("aEmettre");
        $this->assertEquals("aEmettre", $obj->getAEmettre());
    }

    /**
     * Tests the setAccepteDepuisQBureau() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQBureau(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQBureau(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQBureau());
    }

    /**
     * Tests the setAccepteDepuisQc() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQc(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQc(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQc());
    }

    /**
     * Tests the setAccepteDepuisQp() method.
     *
     * @return void
     */
    public function testSetAccepteDepuisQp(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQp(true);
        $this->assertEquals(true, $obj->getAccepteDepuisQp());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setModifiable() method.
     *
     * @return void
     */
    public function testSetModifiable(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setModifiable(true);
        $this->assertEquals(true, $obj->getModifiable());
    }

    /**
     * Tests the setSansImages() method.
     *
     * @return void
     */
    public function testSetSansImages(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setSansImages(true);
        $this->assertEquals(true, $obj->getSansImages());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LiaisonsTypesEnvois();

        $this->assertNull($obj->getABloquer());
        $this->assertNull($obj->getAEmettre());
        $this->assertNull($obj->getAccepteDepuisQBureau());
        $this->assertNull($obj->getAccepteDepuisQc());
        $this->assertNull($obj->getAccepteDepuisQp());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getModifiable());
        $this->assertNull($obj->getSansImages());
    }
}
