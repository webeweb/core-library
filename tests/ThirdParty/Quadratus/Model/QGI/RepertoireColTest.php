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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RepertoireCol;

/**
 * Repertoire col test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RepertoireColTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RepertoireCol();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeComp());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmail2());
        $this->assertNull($obj->getFlagTel());
        $this->assertNull($obj->getFlagTel2());
        $this->assertNull($obj->getFlagTel3());
        $this->assertNull($obj->getFlagTel4());
        $this->assertNull($obj->getLdapAdsPath());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumSousRep());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTel3());
        $this->assertNull($obj->getTel4());
        $this->assertNull($obj->getUniqId());
    }
}
