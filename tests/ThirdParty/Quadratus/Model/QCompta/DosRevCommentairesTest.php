<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DosRevCommentaires;

/**
 * Dos rev commentaires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevCommentairesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DosRevCommentaires();

        $this->assertNull($obj->getBloquant());
        $this->assertNull($obj->getCodeCollModifQuestion());
        $this->assertNull($obj->getCodeCollModifReponse());
        $this->assertNull($obj->getCodeCollQuestion());
        $this->assertNull($obj->getCodeCollReponse());
        $this->assertNull($obj->getCptComment());
        $this->assertNull($obj->getDtCreationQuestion());
        $this->assertNull($obj->getDtCreationReponse());
        $this->assertNull($obj->getDtModifQuestion());
        $this->assertNull($obj->getDtModifReponse());
        $this->assertNull($obj->getDtTransfertDa());
        $this->assertNull($obj->getEnAttenteReponse());
        $this->assertNull($obj->getNeedAnswer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getPeriodeRev());
        $this->assertNull($obj->getPermanent());
        $this->assertNull($obj->getTxtQuestion());
        $this->assertNull($obj->getTxtReponse());
        $this->assertNull($obj->getType());
    }
}
