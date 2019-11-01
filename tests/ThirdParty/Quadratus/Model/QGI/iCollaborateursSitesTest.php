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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iCollaborateursSites;

/**
 * i collaborateurs sites test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateursSitesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iCollaborateursSites();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getRestrCliAssist1());
        $this->assertNull($obj->getRestrCliAssist2());
        $this->assertNull($obj->getRestrCliAutre1());
        $this->assertNull($obj->getRestrCliAutre2());
        $this->assertNull($obj->getRestrCliCollab());
        $this->assertNull($obj->getRestrCliExpert());
        $this->assertNull($obj->getRestrCliPortef());
    }
}
