<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\SousFamilleArticle;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous famille article test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class SousFamilleArticleTest extends AbstractTestCase {

    /**
     * Tests setActivitePrincipale()
     *
     * @return void
     */
    public function testSetActivitePrincipale(): void {

        $obj = new SousFamilleArticle();

        $obj->setActivitePrincipale("activitePrincipale");
        $this->assertEquals("activitePrincipale", $obj->getActivitePrincipale());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new SousFamilleArticle();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SousFamilleArticle();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousFamilleArticle();

        $this->assertNull($obj->getActivitePrincipale());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
    }
}
