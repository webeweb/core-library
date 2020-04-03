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

use InvalidArgumentException;

/**
 * Integer port trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerPortTrait {

    /**
     * Port.
     *
     * @var int
     */
    protected $port;

    /**
     * Get the port.
     *
     * @return int Returns the port.
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * Set the port.
     *
     * @param int $port The port.
     * @throws InvalidArgumentException Throws an invalid argument exception if the port is not between 1 and 65536.
     */
    public function setPort($port) {
        if ($port < 0 || 65536 < $port) {
            throw new InvalidArgumentException("The port must be between 1 and 65536");
        }
        $this->port = $port;
        return $this;
    }
}
