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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDadsUCommentaireDateTrait;

/**
 * Dads u commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDadsUCommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsUCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDadsUCommentaireDate() {

        // Set a Date/time mock.
        $dadsUCommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeDadsUCommentaireDateTrait();

        $obj->setDadsUCommentaireDate($dadsUCommentaireDate);
        $this->assertSame($dadsUCommentaireDate, $obj->getDadsUCommentaireDate());
    }
}
