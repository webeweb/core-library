<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Tests\Provider;

use Throwable;
use WBW\Library\Ciqual\Model\Table;
use WBW\Library\Ciqual\Provider\XmlProvider;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * XML provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Provider
 */
class XmlProviderTest extends AbstractTestCase {

    /**
     * Test extractZip()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExtractZip(): void {

        // Set the mocks.
        $url  = "https://ciqual.anses.fr/cms/sites/default/files/inline-files/XML_2020_07_07.zip";
        $file = __DIR__ . "/../../../../var/ciqual.zip";

        XmlProvider::downloadZip($url, $file);

        $res = XmlProvider::extractZip($file);
        $this->assertInstanceOf(Table::class, $res);

        $this->assertArrayHasKey(0, $res->getAliments());
        $this->assertArrayHasKey(0, $res->getGroupesAliments());
        $this->assertArrayHasKey(0, $res->getCompositions());
        $this->assertArrayHasKey(0, $res->getConstituants());
        $this->assertArrayHasKey(0, $res->getSources());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("alim_", XmlProvider::FILENAME_ALIMENT);
        $this->assertEquals("alim_grp_", XmlProvider::FILENAME_GROUPE_ALIMENT);
        $this->assertEquals("compo_", XmlProvider::FILENAME_COMPOSITION);
        $this->assertEquals("const_", XmlProvider::FILENAME_CONSTITUANT);
        $this->assertEquals("sources_", XmlProvider::FILENAME_SOURCE);
    }
}
