<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\IO;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\IO\FileNotFoundException;
use WBW\Library\Core\Utility\IO\DirectoryUtility;

/**
 * Directory utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\IO
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

        $this->assertTrue(DirectoryUtility::create($arg1));
        $this->assertNull(DirectoryUtility::create($arg1));
        $this->assertTrue(DirectoryUtility::create($arg2));
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

        $this->assertNull(DirectoryUtility::isEmpty("exception"));
        $this->assertFalse(DirectoryUtility::isEmpty($arg1));
        $this->assertTrue(DirectoryUtility::isEmpty($arg2));
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

        $this->assertTrue(DirectoryUtility::rename($arg2, $arg2 . "2"));

        try {
            DirectoryUtility::rename($arg2, $arg2 . "2");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $arg2 . "\" is not found", $ex->getMessage());
        }

        $this->assertNull(DirectoryUtility::rename($arg2 . "2", $arg1));
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

        $this->assertNull(DirectoryUtility::delete($arg1));
        $this->assertTrue(DirectoryUtility::delete($arg2));
        $this->assertTrue(DirectoryUtility::delete($arg1));
    }

}
