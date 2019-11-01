<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroitClientsTrait;

/**
 * Niveau droit clients trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroitClientsTraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroitClients() method.
     *
     * @return void
     */
    public function testSetNiveauDroitClients() {

        $obj = new TestStringNiveauDroitClientsTrait();

        $obj->setNiveauDroitClients("niveauDroitClients");
        $this->assertEquals("niveauDroitClients", $obj->getNiveauDroitClients());
    }
}
