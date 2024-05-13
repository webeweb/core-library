<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Highcharts\Tests\Model;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts options test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model
 * @version 5.0.14
 */
class HighchartsOptionsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $global = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();
        $lang   = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $exp = ["global" => $global->jsonSerialize(), "lang" => $lang->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();
        $obj->setGlobal($global);
        $obj->setLang($lang);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newGlobal()
     *
     * @return void.
     */
    public function testNewGlobal(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();

        $res = $obj->newGlobal();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Options\HighchartsGlobal::class, $res);
    }

    /**
     * Tests newLang()
     *
     * @return void.
     */
    public function testNewLang(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();

        $res = $obj->newLang();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Options\HighchartsLang::class, $res);
    }

    /**
     * Tests setGlobal()
     *
     * @return void.
     */
    public function testSetGlobal(): void {

        // Set a \WBW\Library\Highcharts\Model\Options\HighchartsGlobal mock.
        $global = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();

        $obj->setGlobal($global);
        $this->assertSame($global, $obj->getGlobal());
    }

    /**
     * Tests setLang()
     *
     * @return void.
     */
    public function testSetLang(): void {

        // Set a \WBW\Library\Highcharts\Model\Options\HighchartsLang mock.
        $lang = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();

        $obj->setLang($lang);
        $this->assertSame($lang, $obj->getLang());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\HighchartsOptions();

        $this->assertNull($obj->getGlobal());
        $this->assertNull($obj->getLang());
    }
}
