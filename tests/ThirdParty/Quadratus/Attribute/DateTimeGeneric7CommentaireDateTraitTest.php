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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric7CommentaireDateTrait;

/**
 * Generic7 commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric7CommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric7CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric7CommentaireDate() {

        // Set a Date/time mock.
        $generic7CommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric7CommentaireDateTrait();

        $obj->setGeneric7CommentaireDate($generic7CommentaireDate);
        $this->assertSame($generic7CommentaireDate, $obj->getGeneric7CommentaireDate());
    }
}
