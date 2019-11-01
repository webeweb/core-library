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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDebutRemplTrait;

/**
 * Date debut rempl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDebutRemplTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDebutRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl() {

        // Set a Date/time mock.
        $dateDebutRempl = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDebutRemplTrait();

        $obj->setDateDebutRempl($dateDebutRempl);
        $this->assertSame($dateDebutRempl, $obj->getDateDebutRempl());
    }
}
