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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDtValiditeDebutTrait;

/**
 * Dt validite debut trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDtValiditeDebutTraitTest extends AbstractTestCase {

    /**
     * Tests the setDtValiditeDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeDebut() {

        // Set a Date/time mock.
        $dtValiditeDebut = new DateTime("2018-09-10");

        $obj = new TestDateTimeDtValiditeDebutTrait();

        $obj->setDtValiditeDebut($dtValiditeDebut);
        $this->assertSame($dtValiditeDebut, $obj->getDtValiditeDebut());
    }
}
