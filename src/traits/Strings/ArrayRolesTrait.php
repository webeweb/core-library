<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * Array roles trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait ArrayRolesTrait {

    /**
     * Roles.
     *
     * @var string[]
     */
    protected $roles;

    /**
     * Add a role.
     *
     * @param string $role The role.
     * @return self Returns this instance.
     */
    public function addRole(string $role): self {

        if (false === $this->hasRole($role)) {
            $this->roles[] = strtoupper($role);
        }

        return $this;
    }

    /**
     * Get the roles.
     *
     * @return string[] Returns the roles.
     */
    public function getRoles(): array {
        return $this->roles;
    }

    /**
     * Determines if this group has role.
     *
     * @param string $role A role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRole(string $role): bool {
        return in_array(strtoupper($role), $this->roles, true);
    }

    /**
     * Remove a role.
     *
     * @param string $role The role.
     * @return self Returns this instance.
     */
    public function removeRole(string $role): self {

        $key = array_search(strtoupper($role), $this->roles, true);
        if (false !== $key) {

            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }

        return $this;
    }

    /**
     * Set the roles.
     *
     * @param string[] $roles The roles.
     * @return self Returns this instance.
     */
    public function setRoles(array $roles): self {
        $this->roles = $roles;
        return $this;
    }
}
