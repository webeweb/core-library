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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateFinReelleTrait;

/**
 * Date fin reelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateFinReelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateFinReelle() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinReelle() {

        // Set a Date/time mock.
        $dateFinReelle = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateFinReelleTrait();

        $obj->setDateFinReelle($dateFinReelle);
        $this->assertSame($dateFinReelle, $obj->getDateFinReelle());
    }
}
