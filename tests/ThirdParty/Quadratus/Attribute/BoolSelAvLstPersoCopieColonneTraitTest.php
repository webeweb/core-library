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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSelAvLstPersoCopieColonneTrait;

/**
 * Sel av lst perso copie colonne trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSelAvLstPersoCopieColonneTraitTest extends AbstractTestCase {

    /**
     * Tests the setSelAvLstPersoCopieColonne() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoCopieColonne() {

        $obj = new TestBoolSelAvLstPersoCopieColonneTrait();

        $obj->setSelAvLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoCopieColonne());
    }
}
