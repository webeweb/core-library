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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDtModifReponseTrait;

/**
 * Dt modif reponse trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDtModifReponseTraitTest extends AbstractTestCase {

    /**
     * Tests the setDtModifReponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtModifReponse() {

        // Set a Date/time mock.
        $dtModifReponse = new DateTime("2018-09-10");

        $obj = new TestDateTimeDtModifReponseTrait();

        $obj->setDtModifReponse($dtModifReponse);
        $this->assertSame($dtModifReponse, $obj->getDtModifReponse());
    }
}
