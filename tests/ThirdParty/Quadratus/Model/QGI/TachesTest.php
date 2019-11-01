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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Taches;

/**
 * Taches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TachesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Taches();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeFrais());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getCodeUo());
        $this->assertNull($obj->getCompteComptable());
        $this->assertNull($obj->getCompteTva());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getInactif());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleRtf());
        $this->assertNull($obj->getListeTravaux());
        $this->assertNull($obj->getNiveauExec());
        $this->assertNull($obj->getNonRemboursable());
        $this->assertNull($obj->getNonTravaillee());
        $this->assertNull($obj->getOperationnelle());
        $this->assertNull($obj->getPvMaxi());
        $this->assertNull($obj->getPrixVente1());
        $this->assertNull($obj->getPrixVente2());
        $this->assertNull($obj->getPrixVente3());
        $this->assertNull($obj->getSaisieTva());
        $this->assertNull($obj->getSuperFacturable());
        $this->assertNull($obj->getTicketResto());
        $this->assertNull($obj->getTypeHeure());
    }
}
