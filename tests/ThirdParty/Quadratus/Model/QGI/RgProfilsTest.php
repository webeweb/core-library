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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RgProfils;

/**
 * Rg profils test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RgProfilsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RgProfils();

        $this->assertNull($obj->getFichiersMove());
        $this->assertNull($obj->getFichiersPublierWeb());
        $this->assertNull($obj->getNiveauMaxi());
        $this->assertNull($obj->getNiveauSupplementairelibelle());
        $this->assertNull($obj->getPath());
        $this->assertNull($obj->getPathFormat());
        $this->assertNull($obj->getUniqId());
    }
}
