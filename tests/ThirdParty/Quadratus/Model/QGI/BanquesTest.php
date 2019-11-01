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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Banques;

/**
 * Banques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BanquesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Banques();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getEdiTdfc());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIdCarteAppelEnv());
        $this->assertNull($obj->getIdCarteAppelEnv2());
        $this->assertNull($obj->getIdCarteAppelEnv3());
        $this->assertNull($obj->getIdCarteAppelRec());
        $this->assertNull($obj->getIsBanqueFact());
        $this->assertNull($obj->getMandatDateDebutEtebac());
        $this->assertNull($obj->getMandatDureeEtebac());
        $this->assertNull($obj->getMandatPieceJointeEtebac());
        $this->assertNull($obj->getNbPrelevements());
        $this->assertNull($obj->getNomInt());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSepa());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqId());
    }
}
