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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDebutPeriodeDeclTrait;

/**
 * Debut periode decl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDebutPeriodeDeclTraitTest extends AbstractTestCase {

    /**
     * Tests the setDebutPeriodeDecl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDecl() {

        // Set a Date/time mock.
        $debutPeriodeDecl = new DateTime("2018-09-10");

        $obj = new TestDateTimeDebutPeriodeDeclTrait();

        $obj->setDebutPeriodeDecl($debutPeriodeDecl);
        $this->assertSame($debutPeriodeDecl, $obj->getDebutPeriodeDecl());
    }
}
