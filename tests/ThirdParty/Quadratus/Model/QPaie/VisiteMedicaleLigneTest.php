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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\VisiteMedicaleLigne;

/**
 * Visite medicale ligne test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class VisiteMedicaleLigneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VisiteMedicaleLigne();

        $this->assertNull($obj->getCodeMedecineTravail());
        $this->assertNull($obj->getCodeSession());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateVisite());
        $this->assertNull($obj->getDureeVisite());
        $this->assertNull($obj->getEtatVisite());
        $this->assertNull($obj->getHeureVisite());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeVisite());
    }
}
