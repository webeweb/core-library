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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iComptaDroitsJournaux;

/**
 * i compta droits journaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iComptaDroitsJournauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iComptaDroitsJournaux();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNoDossCpta());
    }
}
