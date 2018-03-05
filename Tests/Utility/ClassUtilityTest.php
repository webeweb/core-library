<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use Exception;
use PHPUnit_Framework_TestCase;
use ReflectionException;
use WBW\Library\Core\Utility\ClassUtility;

/**
 * Class utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class ClassUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getShortName() method.
     *
     * @return void
     */
    public function testGetShortName() {

        try {
            ClassUtility::getShortName("classnotfound");
        } catch (Exception $ex) {
            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }

        $this->assertEquals("ClassUtilityTest", ClassUtility::getShortName($this));
    }

}
