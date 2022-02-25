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

use WBW\Library\Quadratus\Model\QPaie\SaisiePrepaColonne;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Saisie prepa colonne test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class SaisiePrepaColonneTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setIntitCol()
     *
     * @return void
     */
    public function testSetIntitCol(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setIntitCol("intitCol");
        $this->assertEquals("intitCol", $obj->getIntitCol());
    }

    /**
     * Tests setLigneAbondement()
     *
     * @return void
     */
    public function testSetLigneAbondement(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setLigneAbondement("ligneAbondement");
        $this->assertEquals("ligneAbondement", $obj->getLigneAbondement());
    }

    /**
     * Tests setNumCol()
     *
     * @return void
     */
    public function testSetNumCol(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setNumCol("numCol");
        $this->assertEquals("numCol", $obj->getNumCol());
    }

    /**
     * Tests setWidth()
     *
     * @return void
     */
    public function testSetWidth(): void {

        $obj = new SaisiePrepaColonne();

        $obj->setWidth(10);
        $this->assertEquals(10, $obj->getWidth());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SaisiePrepaColonne();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getIntitCol());
        $this->assertNull($obj->getLigneAbondement());
        $this->assertNull($obj->getNumCol());
        $this->assertNull($obj->getWidth());
    }
}
