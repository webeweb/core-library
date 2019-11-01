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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Acomptes;

/**
 * Acomptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AcomptesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Acomptes();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getEnEuro());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPaye());
        $this->assertNull($obj->getTypePaiement());
    }
}
