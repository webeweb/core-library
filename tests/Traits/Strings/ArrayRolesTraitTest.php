<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestArrayRolesTrait;

/**
 * Array roles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class ArrayRolesTraitTest extends AbstractTestCase {

    /**
     * Test addRole()
     *
     * @return void
     */
    public function testAddRole(): void {

        $obj = new TestArrayRolesTrait();

        $obj->addRole("role");
        $this->assertEquals(["ROLE"], $obj->getRoles());
    }

    /**
     * Test hasRole()
     *
     * @return void
     */
    public function testHasRole(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("role");

        $this->assertTrue($obj->hasRole("ROLE"));
        $this->assertTrue($obj->hasRole("role"));
        $this->assertFalse($obj->hasRole(""));
    }

    /**
     * Test hasRoleContains()
     *
     * @return void
     */
    public function testHasRoleContains(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("ROLE_SUPER_ADMIN");

        $this->assertTrue($obj->hasRoleContains("ROLE"));
        $this->assertTrue($obj->hasRoleContains("role"));
        $this->assertTrue($obj->hasRoleContains("SUPER"));
        $this->assertTrue($obj->hasRoleContains("super"));
        $this->assertTrue($obj->hasRoleContains("ADMIN"));
        $this->assertTrue($obj->hasRoleContains("admin"));
    }

    /**
     * Test hasRoleEndsWith()
     *
     * @return void
     */
    public function testHasRoleEndsWith(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("ROLE_SUPER_ADMIN");

        $this->assertTrue($obj->hasRoleEndsWith("ADMIN"));
        $this->assertTrue($obj->hasRoleEndsWith("admin"));
        $this->assertFalse($obj->hasRoleEndsWith("SUPER"));
        $this->assertFalse($obj->hasRoleEndsWith("ROLE"));
    }

    /**
     * Test hasRoleStartsWith()
     *
     * @return void
     */
    public function testHasRoleStartsWith(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("ROLE_SUPER_ADMIN");

        $this->assertTrue($obj->hasRoleStartsWith("ROLE"));
        $this->assertTrue($obj->hasRoleStartsWith("role"));
        $this->assertFalse($obj->hasRoleStartsWith("SUPER"));
        $this->assertFalse($obj->hasRoleStartsWith("ADMIN"));
    }

    /**
     * Test removeRole()
     *
     * @return void
     */
    public function testRemoveRole(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("role");

        $obj->removeRole("role");
        $this->assertEquals([], $obj->getRoles());
    }

    /**
     * Test setRoles()
     *
     * @return void
     */
    public function testSetRoles(): void {

        $roles = ["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_USER"];

        $obj = new TestArrayRolesTrait();

        $obj->setRoles($roles);
        $this->assertEquals($roles, $obj->getRoles());
    }
}
