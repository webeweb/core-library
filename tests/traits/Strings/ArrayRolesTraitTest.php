<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestArrayRolesTrait;

/**
 * Array roles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class ArrayRolesTraitTest extends AbstractTestCase {

    /**
     * Tests addRole()
     *
     * @return void
     */
    public function testAddRole(): void {

        $obj = new TestArrayRolesTrait();

        $obj->addRole("role");
        $this->assertEquals(["ROLE"], $obj->getRoles());
    }

    /**
     * Tests hasRole()
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
     * Tests hasRoleContains()
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
     * Tests hasRoleEndsWith()
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
     * Tests hasRoleStartsWith()
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
     * Tests removeRole()
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
     * Tests setRoles()
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
