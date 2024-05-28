<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\LiaisonsTypesEnvois;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons types envois test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsTypesEnvoisTest extends AbstractTestCase {

    /**
     * Test setABloquer()
     *
     * @return void
     */
    public function testSetABloquer(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setABloquer("aBloquer");
        $this->assertEquals("aBloquer", $obj->getABloquer());
    }

    /**
     * Test setAEmettre()
     *
     * @return void
     */
    public function testSetAEmettre(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAEmettre("aEmettre");
        $this->assertEquals("aEmettre", $obj->getAEmettre());
    }

    /**
     * Test setAccepteDepuisQBureau()
     *
     * @return void
     */
    public function testSetAccepteDepuisQBureau(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQBureau(true);
        $this->assertTrue($obj->getAccepteDepuisQBureau());
    }

    /**
     * Test setAccepteDepuisQc()
     *
     * @return void
     */
    public function testSetAccepteDepuisQc(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQc(true);
        $this->assertTrue($obj->getAccepteDepuisQc());
    }

    /**
     * Test setAccepteDepuisQp()
     *
     * @return void
     */
    public function testSetAccepteDepuisQp(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setAccepteDepuisQp(true);
        $this->assertTrue($obj->getAccepteDepuisQp());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setModifiable()
     *
     * @return void
     */
    public function testSetModifiable(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setModifiable(true);
        $this->assertTrue($obj->getModifiable());
    }

    /**
     * Test setSansImages()
     *
     * @return void
     */
    public function testSetSansImages(): void {

        $obj = new LiaisonsTypesEnvois();

        $obj->setSansImages(true);
        $this->assertTrue($obj->getSansImages());
    }

    /**
     * Test __construct()
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
