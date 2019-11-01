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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\MotsClefEtebac;

/**
 * Mots clef etebac test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class MotsClefEtebacTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MotsClefEtebac();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getListeComptes());
        $this->assertNull($obj->getMot());
        $this->assertNull($obj->getNumeroCompteDepense());
        $this->assertNull($obj->getNumeroCompteRecette());
        $this->assertNull($obj->getRegle());
    }
}
