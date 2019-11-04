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
 * String hostname trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringHostnameTrait {

    /**
     * Hostname.
     *
     * @var string
     */
    protected $hostname;

    /**
     * Get the hostname.
     *
     * @return string Returns the hostname.
     */
    public function getHostname() {
        return $this->hostname;
    }

    /**
     * Set the hostname.
     *
     * @param string $hostname The hostname.
     */
    public function setHostname($hostname) {
        $this->hostname = $hostname;
        return $this;
    }
}
