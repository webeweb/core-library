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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateEcheanceContratTrait;

/**
 * Date echeance contrat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateEcheanceContratTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateEcheanceContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheanceContrat() {

        // Set a Date/time mock.
        $dateEcheanceContrat = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateEcheanceContratTrait();

        $obj->setDateEcheanceContrat($dateEcheanceContrat);
        $this->assertSame($dateEcheanceContrat, $obj->getDateEcheanceContrat());
    }
}
