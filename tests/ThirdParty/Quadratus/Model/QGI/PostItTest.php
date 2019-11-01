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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\PostIt;

/**
 * Post it test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PostItTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PostIt();

        $this->assertNull($obj->getCodeCollDest());
        $this->assertNull($obj->getCodeCollOrg());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqId());
    }
}
