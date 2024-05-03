<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\NutritionValue;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Nutrition value test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class NutritionValueTest extends AbstractTestCase {

    /**
     * Test setCalcium()
     *
     * @return void
     */
    public function testSetCalcium(): void {

        $obj = new NutritionValue();

        $obj->setCalcium(1);
        $this->assertEquals(1, $obj->getCalcium());
    }

    /**
     * Test setCarbohydrate()
     *
     * @return void
     */
    public function testSetCarbohydrate(): void {

        $obj = new NutritionValue();

        $obj->setCarbohydrate(1);
        $this->assertEquals(1, $obj->getCarbohydrate());
    }

    /**
     * Test setEnergyKcal()
     *
     * @return void
     */
    public function testSetEnergyKcal(): void {

        $obj = new NutritionValue();

        $obj->setEnergyKcal(1);
        $this->assertEquals(1, $obj->getEnergyKcal());
    }

    /**
     * Test setEnergyKj()
     *
     * @return void
     */
    public function testSetEnergyKj(): void {

        $obj = new NutritionValue();

        $obj->setEnergyKj(1);
        $this->assertEquals(1, $obj->getEnergyKj());
    }

    /**
     * Test setEthanol()
     *
     * @return void
     */
    public function testSetEthanol(): void {

        $obj = new NutritionValue();

        $obj->setEthanol(1);
        $this->assertEquals(1, $obj->getEthanol());
    }

    /**
     * Test setFiber()
     *
     * @return void
     */
    public function testSetFiber(): void {

        $obj = new NutritionValue();

        $obj->setFiber(1);
        $this->assertEquals(1, $obj->getFiber());
    }

    /**
     * Test setIncludingSaturatedFattyAcids()
     *
     * @return void
     */
    public function testSetIncludingSaturatedFattyAcids(): void {

        $obj = new NutritionValue();

        $obj->setIncludingSaturatedFattyAcids(1);
        $this->assertEquals(1, $obj->getIncludingSaturatedFattyAcids());
    }

    /**
     * Test setIncludingSugar()
     *
     * @return void
     */
    public function testSetIncludingSugar(): void {

        $obj = new NutritionValue();

        $obj->setIncludingSugar(1);
        $this->assertEquals(1, $obj->getIncludingSugar());
    }

    /**
     * Test setLipid()
     *
     * @return void
     */
    public function testSetLipid(): void {

        $obj = new NutritionValue();

        $obj->setLipid(1);
        $this->assertEquals(1, $obj->getLipid());
    }

    /**
     * Test setOrganicAcid(
     *
     * @return void
     */
    public function testSetOrganicAcid(): void {

        $obj = new NutritionValue();

        $obj->setOrganicAcid(1);
        $this->assertEquals(1, $obj->getOrganicAcid());
    }

    /**
     * Test setPolyols()
     *
     * @return void
     */
    public function testSetPolyols(): void {

        $obj = new NutritionValue();

        $obj->setPolyols(1);
        $this->assertEquals(1, $obj->getPolyols());
    }

    /**
     * Test setProtein()
     *
     * @return void
     */
    public function testSetProtein(): void {

        $obj = new NutritionValue();

        $obj->setProtein(1);
        $this->assertEquals(1, $obj->getProtein());
    }

    /**
     * Test setSalt()
     *
     * @return void
     */
    public function testSetSalt(): void {

        $obj = new NutritionValue();

        $obj->setSalt(1);
        $this->assertEquals(1, $obj->getSalt());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NutritionValue();

        $this->assertNull($obj->getCalcium());
        $this->assertNull($obj->getCarbohydrate());
        $this->assertNull($obj->getEnergyKcal());
        $this->assertNull($obj->getEnergyKj());
        $this->assertNull($obj->getEthanol());
        $this->assertNull($obj->getFiber());
        $this->assertNull($obj->getIncludingSaturatedFattyAcids());
        $this->assertNull($obj->getIncludingSugar());
        $this->assertNull($obj->getLipid());
        $this->assertNull($obj->getOrganicAcid());
        $this->assertNull($obj->getPolyols());
        $this->assertNull($obj->getProtein());
        $this->assertNull($obj->getSalt());
    }
}
