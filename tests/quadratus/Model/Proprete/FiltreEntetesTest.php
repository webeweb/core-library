<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\FiltreEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Filtre entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FiltreEntetesTest extends AbstractTestCase {

    /**
     * Tests the setCodeFiltre() method.
     *
     * @return void
     */
    public function testSetCodeFiltre(): void {

        $obj = new FiltreEntetes();

        $obj->setCodeFiltre("codeFiltre");
        $this->assertEquals("codeFiltre", $obj->getCodeFiltre());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur(): void {

        $obj = new FiltreEntetes();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCommercialFacture() method.
     *
     * @return void
     */
    public function testSetCommercialFacture(): void {

        $obj = new FiltreEntetes();

        $obj->setCommercialFacture(true);
        $this->assertEquals(true, $obj->getCommercialFacture());
    }

    /**
     * Tests the setFonctionnalite() method.
     *
     * @return void
     */
    public function testSetFonctionnalite(): void {

        $obj = new FiltreEntetes();

        $obj->setFonctionnalite("fonctionnalite");
        $this->assertEquals("fonctionnalite", $obj->getFonctionnalite());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new FiltreEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setTypeFiltre() method.
     *
     * @return void
     */
    public function testSetTypeFiltre(): void {

        $obj = new FiltreEntetes();

        $obj->setTypeFiltre("typeFiltre");
        $this->assertEquals("typeFiltre", $obj->getTypeFiltre());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new FiltreEntetes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FiltreEntetes();

        $this->assertNull($obj->getCodeFiltre());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommercialFacture());
        $this->assertNull($obj->getFonctionnalite());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTypeFiltre());
        $this->assertNull($obj->getUniqId());
    }
}
