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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuPrevoyanceAyantDroit;

/**
 * Emp dadsu prevoyance ayant droit test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $this->assertNull($obj->getCodeACharge());
        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getCodeAutreCouverture());
        $this->assertNull($obj->getCodeExtensionSecu());
        $this->assertNull($obj->getCodeScolarise());
        $this->assertNull($obj->getCodeType());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNirRattachement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumeroAyantDroit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getRangNaissance());
    }
}
