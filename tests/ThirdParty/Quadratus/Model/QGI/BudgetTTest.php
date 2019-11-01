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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\BudgetT;

/**
 * Budget t test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BudgetTTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BudgetT();

        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCollabAuteur());
        $this->assertNull($obj->getCollabValideur());
        $this->assertNull($obj->getComment1());
        $this->assertNull($obj->getComment2());
        $this->assertNull($obj->getComment3());
        $this->assertNull($obj->getComment4());
        $this->assertNull($obj->getComment5());
        $this->assertNull($obj->getComment6());
        $this->assertNull($obj->getComment7());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateValid());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHonoPrev());
        $this->assertNull($obj->getLibelle1());
        $this->assertNull($obj->getLibelle2());
        $this->assertNull($obj->getLibelle3());
        $this->assertNull($obj->getLibelle4());
        $this->assertNull($obj->getLibelle5());
        $this->assertNull($obj->getLibelle6());
        $this->assertNull($obj->getLibelle7());
        $this->assertNull($obj->getNbrBulletins());
        $this->assertNull($obj->getNbrEcritures());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getPrix1());
        $this->assertNull($obj->getPrix2());
        $this->assertNull($obj->getPrix3());
        $this->assertNull($obj->getPrix4());
        $this->assertNull($obj->getPrix5());
        $this->assertNull($obj->getPrix6());
        $this->assertNull($obj->getPrix7());
        $this->assertNull($obj->getSaisieTache());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getValoRecap());
    }
}
