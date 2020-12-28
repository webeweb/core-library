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
     * @var string|null
     */
    protected $hostname;

    /**
     * Get the hostname.
     *
     * @return string|null Returns the hostname.
     */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Set the hostname.
     *
     * @param string|null $hostname The hostname.
     */
    public function setHostname(?string $hostname) {
        $this->hostname = $hostname;
        return $this;
    }
}
