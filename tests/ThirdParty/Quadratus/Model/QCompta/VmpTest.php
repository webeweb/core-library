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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Vmp;

/**
 * Vmp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Vmp();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCompteComm());
        $this->assertNull($obj->getCompteCoupons());
        $this->assertNull($obj->getCompteFrais());
        $this->assertNull($obj->getIdentifiant());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbLignesMvt());
        $this->assertNull($obj->getNumCompte());
    }
}
