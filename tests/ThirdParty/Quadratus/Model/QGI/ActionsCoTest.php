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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCo;

/**
 * Actions co test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCo();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinVie());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getOpConfirmation());
        $this->assertNull($obj->getOpContratSigne());
        $this->assertNull($obj->getOpExplication());
        $this->assertNull($obj->getOpInvitationIndiv());
        $this->assertNull($obj->getOpInvitationMasse());
        $this->assertNull($obj->getOpPresence());
        $this->assertNull($obj->getOpPriseRdv());
        $this->assertNull($obj->getOpRelance());
        $this->assertNull($obj->getOpReponseInscrip());
        $this->assertNull($obj->getOpReponseNegative());
        $this->assertNull($obj->getOpReservation());
    }
}
