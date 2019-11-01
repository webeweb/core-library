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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AffaireSuivi;

/**
 * Affaire suivi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AffaireSuiviTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffaireSuivi();

        $this->assertNull($obj->getAvancement());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateBilan());
        $this->assertNull($obj->getListeCollab());
        $this->assertNull($obj->getNbHeuresPrevisionnel());
    }
}
