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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric5CommentaireDateTrait;

/**
 * Generic5 commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric5CommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric5CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric5CommentaireDate() {

        // Set a Date/time mock.
        $generic5CommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric5CommentaireDateTrait();

        $obj->setGeneric5CommentaireDate($generic5CommentaireDate);
        $this->assertSame($generic5CommentaireDate, $obj->getGeneric5CommentaireDate());
    }
}
