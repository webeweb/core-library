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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Materiels;

/**
 * Materiels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class MaterielsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Materiels();

        $this->assertNull($obj->getCarTec());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeIntervenant());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateFinUtil());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSousCategorie());
    }
}
