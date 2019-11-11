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
 * String location trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringLocationTrait {

    /**
     * Location.
     *
     * @var string
     */
    protected $location;

    /**
     * Get the location.
     *
     * @return string Returns the location.
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Set the location.
     *
     * @param string $location The location.
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }
}
