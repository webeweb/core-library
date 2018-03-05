<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\File\FileNotFoundException;
use WBW\Library\Core\Utility\DirectoryUtility;

/**
 * Directory utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class DirectoryUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the create() method.
     *
     * @return void
     */
    public function testCreate() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest";

        $this->assertEquals(true, DirectoryUtility::create($arg1));
        $this->assertEquals(null, DirectoryUtility::create($arg1));
        $this->assertEquals(true, DirectoryUtility::create($arg2));
    }

    /**
     * Tests the isEmpty() method.
     *
     * @return void
     * @depends testCreate
     */
    public function testIsEmpty() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest";

        $this->assertEquals(null, DirectoryUtility::isEmpty("exception"));
        $this->assertEquals(false, DirectoryUtility::isEmpty($arg1));
        $this->assertEquals(true, DirectoryUtility::isEmpty($arg2));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testCreate
     */
    public function testRename() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest";

        $this->assertEquals(true, DirectoryUtility::rename($arg2, $arg2 . "2"));

        try {
            DirectoryUtility::rename($arg2, $arg2 . "2");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $arg2 . "\" is not found", $ex->getMessage());
        }

        $this->assertEquals(null, DirectoryUtility::rename($arg2 . "2", $arg1));
    }

    /**
     * Tests the delete() method.
     *
     * @return void
     * @depends testRename
     */
    public function testDelete() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest2";

        $this->assertEquals(null, DirectoryUtility::delete($arg1));
        $this->assertEquals(true, DirectoryUtility::delete($arg2));
        $this->assertEquals(true, DirectoryUtility::delete($arg1));
    }

}
