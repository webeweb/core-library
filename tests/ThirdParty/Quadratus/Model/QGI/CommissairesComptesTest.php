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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CommissairesComptes;

/**
 * Commissaires comptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CommissairesComptesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CommissairesComptes();

        $this->assertNull($obj->getCodeCac());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDureeMandat());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getTitulaire());
    }
}
