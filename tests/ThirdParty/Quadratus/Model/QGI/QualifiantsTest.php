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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Qualifiants;

/**
 * Qualifiants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class QualifiantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Qualifiants();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getVisuAppels());
        $this->assertNull($obj->getVisuDocuments());
        $this->assertNull($obj->getVisuEvenements());
    }
}
