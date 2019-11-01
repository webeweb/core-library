<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConventionsColGrillesAnc;

/**
 * Conventions col grilles anc test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColGrillesAncTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConventionsColGrillesAnc();

        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeGrille());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getTypeGrille());
    }
}
