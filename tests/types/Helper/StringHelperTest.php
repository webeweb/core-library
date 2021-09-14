<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use Exception;
use WBW\Library\Types\Helper\StringHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * String helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Tests\Helper
 */
class StringHelperTest extends AbstractTestCase {

    /**
     * Tests the canonicalize() method.
     *
     * @return void
     */
    public function testCanonicalize(): void {

        $this->assertNull(StringHelper::canonicalize(null));
        $this->assertEquals("john.doe@github.com", StringHelper::canonicalize("John.DOE@GitHub.com"));
    }

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNode(): void {

        $arg = ["type" => "text/javascript"];
        $res = file_get_contents(__DIR__ . "/StringHelperTest.testDomNode.html.txt");
        $this->assertEquals($res, StringHelper::domNode("script", "\n    $(document).ready(function() {});\n", $arg) . "\n");
    }

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNodeWithShortTag(): void {

        $arg = ["type" => "text/javascript"];
        $res = '<script type="text/javascript"/>';
        $this->assertEquals($res, StringHelper::domNode("script", null, $arg, true));
    }

    /**
     * Tests the extractUpperCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExtractUpperCase(): void {

        $this->assertEquals("CB", StringHelper::extractUpperCase("CoreBundle"));
        $this->assertEquals("cb", StringHelper::extractUpperCase("CoreBundle", true));

        $this->assertEquals("BB", StringHelper::extractUpperCase("BootstrapBundle"));
        $this->assertEquals("bb", StringHelper::extractUpperCase("BootstrapBundle", true));

        $this->assertEquals("JQDTB", StringHelper::extractUpperCase("JQueryDataTablesBundle"));
        $this->assertEquals("jqdtb", StringHelper::extractUpperCase("JQueryDataTablesBundle", true));

        $this->assertEquals("EDMB", StringHelper::extractUpperCase("EDMBundle"));
        $this->assertEquals("edmb", StringHelper::extractUpperCase("EDMBundle", true));

        $this->assertEquals("ECSVA", StringHelper::extractUpperCase("ExportCSVAction"));
        $this->assertEquals("ecsva", StringHelper::extractUpperCase("ExportCSVAction", true));

        $this->assertEquals("ECSV", StringHelper::extractUpperCase("ExportCSV"));
        $this->assertEquals("ecsv", StringHelper::extractUpperCase("ExportCSV", true));
    }

    /**
     * Tests the fileSize() method.
     *
     * @return void
     */
    public function testFileSize(): void {

        $this->assertEquals("", StringHelper::fileSize(null));
        $this->assertEquals("", StringHelper::fileSize(-1));
        $this->assertEquals("", StringHelper::fileSize(1, -1));

        $this->assertRegExp("/^1[\.,]00 Kio$/", StringHelper::fileSize(1024));
        $this->assertRegExp("/^1[\.,]00 Mio$/", StringHelper::fileSize(1048576));
        $this->assertRegExp("/^1[\.,]00 Gio$/", StringHelper::fileSize(1073741842));
        $this->assertRegExp("/^1[\.,]00 Tio$/", StringHelper::fileSize(1099511627776));

        $this->assertRegExp("/^1[\.,]000 Tio$/", StringHelper::fileSize(1099511627776, 3));
    }

    /**
     * Tests the parseArray() method.
     *
     * @return void
     */
    public function testParseArray(): void {

        $arg = ["exception" => null, "id" => "id", "class" => ["class1", "class2", "class3   class4"]];
        $res = 'id="id" class="class1 class2 class3 class4"';
        $this->assertEquals($res, StringHelper::parseArray($arg));
    }

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean(): void {

        $this->assertEquals("false", StringHelper::parseBoolean(null));
        $this->assertEquals("false", StringHelper::parseBoolean(false));
        $this->assertEquals("true", StringHelper::parseBoolean(true));
    }

    /**
     * Tests the removeAccents() method.
     *
     * @return void
     */
    public function testRemoveAccents(): void {

        $this->assertEquals("a", StringHelper::removeAccents("à"));
        $this->assertEquals("a", StringHelper::removeAccents("á"));
        $this->assertEquals("a", StringHelper::removeAccents("â"));
        $this->assertEquals("a", StringHelper::removeAccents("ã"));
        $this->assertEquals("a", StringHelper::removeAccents("ä"));
        $this->assertEquals("c", StringHelper::removeAccents("ç"));
        $this->assertEquals("e", StringHelper::removeAccents("è"));
        $this->assertEquals("e", StringHelper::removeAccents("é"));
        $this->assertEquals("e", StringHelper::removeAccents("ê"));
        $this->assertEquals("e", StringHelper::removeAccents("ë"));
        $this->assertEquals("i", StringHelper::removeAccents("ì"));
        $this->assertEquals("i", StringHelper::removeAccents("í"));
        $this->assertEquals("i", StringHelper::removeAccents("î"));
        $this->assertEquals("i", StringHelper::removeAccents("ï"));
        $this->assertEquals("n", StringHelper::removeAccents("ñ"));
        $this->assertEquals("o", StringHelper::removeAccents("ò"));
        $this->assertEquals("o", StringHelper::removeAccents("ó"));
        $this->assertEquals("o", StringHelper::removeAccents("ô"));
        $this->assertEquals("o", StringHelper::removeAccents("õ"));
        $this->assertEquals("o", StringHelper::removeAccents("ö"));
        $this->assertEquals("u", StringHelper::removeAccents("ù"));
        $this->assertEquals("u", StringHelper::removeAccents("ú"));
        $this->assertEquals("u", StringHelper::removeAccents("û"));
        $this->assertEquals("u", StringHelper::removeAccents("ü"));
        $this->assertEquals("y", StringHelper::removeAccents("ý"));
        $this->assertEquals("y", StringHelper::removeAccents("ÿ"));
        $this->assertEquals("A", StringHelper::removeAccents("À"));
        $this->assertEquals("A", StringHelper::removeAccents("Á"));
        $this->assertEquals("A", StringHelper::removeAccents("Â"));
        $this->assertEquals("A", StringHelper::removeAccents("Ã"));
        $this->assertEquals("A", StringHelper::removeAccents("Ä"));
        $this->assertEquals("C", StringHelper::removeAccents("Ç"));
        $this->assertEquals("E", StringHelper::removeAccents("È"));
        $this->assertEquals("E", StringHelper::removeAccents("É"));
        $this->assertEquals("E", StringHelper::removeAccents("Ê"));
        $this->assertEquals("E", StringHelper::removeAccents("Ë"));
        $this->assertEquals("I", StringHelper::removeAccents("Ì"));
        $this->assertEquals("I", StringHelper::removeAccents("Í"));
        $this->assertEquals("I", StringHelper::removeAccents("Î"));
        $this->assertEquals("I", StringHelper::removeAccents("Ï"));
        $this->assertEquals("N", StringHelper::removeAccents("Ñ"));
        $this->assertEquals("O", StringHelper::removeAccents("Ò"));
        $this->assertEquals("O", StringHelper::removeAccents("Ó"));
        $this->assertEquals("O", StringHelper::removeAccents("Ô"));
        $this->assertEquals("O", StringHelper::removeAccents("Õ"));
        $this->assertEquals("O", StringHelper::removeAccents("Ö"));
        $this->assertEquals("U", StringHelper::removeAccents("Ù"));
        $this->assertEquals("U", StringHelper::removeAccents("Ú"));
        $this->assertEquals("U", StringHelper::removeAccents("Û"));
        $this->assertEquals("U", StringHelper::removeAccents("Ü"));
        $this->assertEquals("Y", StringHelper::removeAccents("Ý"));
    }

    /**
     * Tests the toHumanReadable() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testToHumanReadable(): void {

        $this->assertEquals("Core bundle", StringHelper::toHumanReadable("CoreBundle"));
        $this->assertEquals("Bootstrap bundle", StringHelper::toHumanReadable("BootstrapBundle"));
        $this->assertEquals("J query data tables bundle", StringHelper::toHumanReadable("JQueryDataTablesBundle"));
        $this->assertEquals("EDM bundle", StringHelper::toHumanReadable("EDMBundle"));
        $this->assertEquals("Export CSV action", StringHelper::toHumanReadable("ExportCSVAction"));
        $this->assertEquals("Export CSV", StringHelper::toHumanReadable("ExportCSV"));
    }

    /**
     * Tests the toLowerCamelCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testToLowerCamelCase(): void {

        $this->assertEquals("coreBundle", StringHelper::toLowerCamelCase("CoreBundle"));
        $this->assertEquals("bootstrapBundle", StringHelper::toLowerCamelCase("BootstrapBundle"));
        $this->assertEquals("jQueryDataTablesBundle", StringHelper::toLowerCamelCase("JQueryDataTablesBundle"));
        $this->assertEquals("edmBundle", StringHelper::toLowerCamelCase("EDMBundle"));
        $this->assertEquals("exportCSVAction", StringHelper::toLowerCamelCase("ExportCSVAction"));
        $this->assertEquals("exportCSV", StringHelper::toLowerCamelCase("ExportCSV"));
    }

    /**
     * Tests the toSnakeCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testToSnakeCase(): void {

        $this->assertEquals("core_bundle", StringHelper::toSnakeCase("CoreBundle"));
        $this->assertEquals("core-bundle", StringHelper::toSnakeCase("CoreBundle", "-"));

        $this->assertEquals("bootstrap_bundle", StringHelper::toSnakeCase("BootstrapBundle"));
        $this->assertEquals("bootstrap-bundle", StringHelper::toSnakeCase("BootstrapBundle", "-"));

        $this->assertEquals("j_query_data_tables_bundle", StringHelper::toSnakeCase("JQueryDataTablesBundle"));
        $this->assertEquals("j-query-data-tables-bundle", StringHelper::toSnakeCase("JQueryDataTablesBundle", "-"));

        $this->assertEquals("edm_bundle", StringHelper::toSnakeCase("EDMBundle"));
        $this->assertEquals("edm-bundle", StringHelper::toSnakeCase("EDMBundle", "-"));

        $this->assertEquals("export_csv_action", StringHelper::toSnakeCase("ExportCSVAction"));
        $this->assertEquals("export-csv-action", StringHelper::toSnakeCase("ExportCSVAction", "-"));

        $this->assertEquals("export_csv", StringHelper::toSnakeCase("ExportCSV"));
        $this->assertEquals("export-csv", StringHelper::toSnakeCase("ExportCSV", "-"));
    }

    /**
     * Tests the toUpperCamelCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testToUpperCamelCase(): void {

        $this->assertEquals("CoreBundle", StringHelper::toUpperCamelCase("coreBundle"));
        $this->assertEquals("BootstrapBundle", StringHelper::toUpperCamelCase("bootstrapBundle"));
        $this->assertEquals("JQueryDataTablesBundle", StringHelper::toUpperCamelCase("jQueryDataTablesBundle"));
        $this->assertEquals("EDMBundle", StringHelper::toUpperCamelCase("eDMBundle"));
        $this->assertEquals("ExportCSVAction", StringHelper::toUpperCamelCase("exportCSVAction"));
        $this->assertEquals("ExportCSV", StringHelper::toUpperCamelCase("exportCSV"));
    }
}
