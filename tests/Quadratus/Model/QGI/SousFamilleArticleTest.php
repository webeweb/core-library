<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\SousFamilleArticle;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Sous famille article model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class SousFamilleArticleTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SousFamilleArticle();

        $this->assertNull($obj->getActivitePrincipale());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
    }

    /**
     * Tests the setActivitePrincipale() method.
     *
     * @return void
     */
    public function testSetActivitePrincipale() {

        $obj = new SousFamilleArticle();

        $obj->setActivitePrincipale("activitePrincipale");
        $this->assertEquals("activitePrincipale", $obj->getActivitePrincipale());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new SousFamilleArticle();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new SousFamilleArticle();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

}
