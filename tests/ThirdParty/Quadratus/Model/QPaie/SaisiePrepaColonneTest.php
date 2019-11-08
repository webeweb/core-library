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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SaisiePrepaColonne;

/**
 * Saisie prepa colonne test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaColonneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SaisiePrepaColonne();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getIntitCol());
        $this->assertNull($obj->getLigneAbondement());
        $this->assertNull($obj->getNumCol());
        $this->assertNull($obj->getWidth());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new SaisiePrepaColonne();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new SaisiePrepaColonne();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new SaisiePrepaColonne();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setIntitCol() method.
     *
     * @return void
     */
    public function testSetIntitCol() {

        $obj = new SaisiePrepaColonne();

        $obj->setIntitCol("intitCol");
        $this->assertEquals("intitCol", $obj->getIntitCol());
    }

    /**
     * Tests the setLigneAbondement() method.
     *
     * @return void
     */
    public function testSetLigneAbondement() {

        $obj = new SaisiePrepaColonne();

        $obj->setLigneAbondement("ligneAbondement");
        $this->assertEquals("ligneAbondement", $obj->getLigneAbondement());
    }

    /**
     * Tests the setNumCol() method.
     *
     * @return void
     */
    public function testSetNumCol() {

        $obj = new SaisiePrepaColonne();

        $obj->setNumCol("numCol");
        $this->assertEquals("numCol", $obj->getNumCol());
    }

    /**
     * Tests the setWidth() method.
     *
     * @return void
     */
    public function testSetWidth() {

        $obj = new SaisiePrepaColonne();

        $obj->setWidth(10);
        $this->assertEquals(10, $obj->getWidth());
    }
}
