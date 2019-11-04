<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Integer marital status trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerMaritalStatusTrait {

    /**
     * Marital status.
     *
     * @var int
     */
    protected $maritalStatus;

    /**
     * Get the marital status.
     *
     * @return int Returns the marital status.
     */
    public function getMaritalStatus() {
        return $this->maritalStatus;
    }

    /**
     * Set the marital status.
     *
     * @param int $maritalStatus The marital status.
     */
    public function setMaritalStatus($maritalStatus) {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }
}
