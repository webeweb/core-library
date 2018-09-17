<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\FileSystem;

use Exception;
use WBW\Library\Core\Exception\FileSystem\FileNotFoundException;
use WBW\Library\Core\FileSystem\DirectoryHelper;
use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;

/**
 * Directory utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\IO
 * @final
 */
final class DirectoryHelperTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the create() method.
     *
     * @return void
     */
    public function testCreate() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest";

        $this->assertTrue(DirectoryHelper::create($arg1));
        $this->assertNull(DirectoryHelper::create($arg1));
        $this->assertTrue(DirectoryHelper::create($arg2));
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

        $this->assertNull(DirectoryHelper::isEmpty("exception"));
        $this->assertFalse(DirectoryHelper::isEmpty($arg1));
        $this->assertTrue(DirectoryHelper::isEmpty($arg2));
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

        $this->assertTrue(DirectoryHelper::rename($arg2, $arg2 . "2"));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testRename
     */
    public function testRenameWithFileNotFoundException() {

        $arg1 = getcwd() . "/phpunit";
        $arg2 = $arg1 . "/unittest";

        try {

            DirectoryHelper::rename($arg2, $arg2 . "2");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"" . $arg2 . "\" is not found", $ex->getMessage());
        }

        $this->assertNull(DirectoryHelper::rename($arg2 . "2", $arg1));
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

        $this->assertNull(DirectoryHelper::delete($arg1));
        $this->assertTrue(DirectoryHelper::delete($arg2));
        $this->assertTrue(DirectoryHelper::delete($arg1));
    }

}
