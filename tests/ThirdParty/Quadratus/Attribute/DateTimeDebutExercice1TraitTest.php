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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDebutExercice1Trait;

/**
 * Debut exercice_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDebutExercice1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDebutExercice1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExercice1() {

        // Set a Date/time mock.
        $debutExercice1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDebutExercice1Trait();

        $obj->setDebutExercice1($debutExercice1);
        $this->assertSame($debutExercice1, $obj->getDebutExercice1());
    }
}
