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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeMandatDateDebutEditvaTrait;

/**
 * Mandat date debut e d i t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeMandatDateDebutEditvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatDateDebutEditva() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutEditva() {

        // Set a Date/time mock.
        $mandatDateDebutEditva = new DateTime("2018-09-10");

        $obj = new TestDateTimeMandatDateDebutEditvaTrait();

        $obj->setMandatDateDebutEditva($mandatDateDebutEditva);
        $this->assertSame($mandatDateDebutEditva, $obj->getMandatDateDebutEditva());
    }
}
