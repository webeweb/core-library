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
}
