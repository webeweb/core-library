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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CompteurEcritures;

/**
 * Compteur ecritures test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CompteurEcrituresTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CompteurEcritures();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateComptage());
        $this->assertNull($obj->getMillesime());
        $this->assertNull($obj->getNbEcritures());
        $this->assertNull($obj->getNbEcrituresADeduire());
        $this->assertNull($obj->getNoChronoPreparation());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqIdPdf());
    }
}
