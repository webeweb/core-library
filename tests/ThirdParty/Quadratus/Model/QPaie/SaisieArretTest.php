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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SaisieArret;

/**
 * Saisie arret test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SaisieArretTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SaisieArret();

        $this->assertNull($obj->getDtCourrier());
        $this->assertNull($obj->getDtDebutSaisie());
        $this->assertNull($obj->getDtFinSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMtCreance());
        $this->assertNull($obj->getMtDejaPaye());
        $this->assertNull($obj->getNbACharge());
        $this->assertNull($obj->getNomTribunal());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeSaisie());
    }
}
