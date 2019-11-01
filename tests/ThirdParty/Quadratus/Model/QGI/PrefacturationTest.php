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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Prefacturation;

/**
 * Prefacturation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PrefacturationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Prefacturation();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getDateSaisie());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getIdPrefacturation());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getPu());
        $this->assertNull($obj->getQte());
        $this->assertNull($obj->getUniqIdFacture());
    }
}
