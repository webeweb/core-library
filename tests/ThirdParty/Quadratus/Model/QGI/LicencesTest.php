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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Licences;

/**
 * Licences test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LicencesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Licences();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientDistr());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCpVille());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDemo());
        $this->assertNull($obj->getLicence());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNombrePostes());
        $this->assertNull($obj->getOption1());
        $this->assertNull($obj->getOption2());
        $this->assertNull($obj->getOption3());
        $this->assertNull($obj->getOption4());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSupport());
        $this->assertNull($obj->getTypeReseau());
        $this->assertNull($obj->getVersion());
    }
}
