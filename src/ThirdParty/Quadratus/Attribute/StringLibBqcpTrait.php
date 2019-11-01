<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Lib bqcp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibBqcpTrait {

    /**
     * Lib bqcp.
     *
     * @var string
     */
    private $libBqcp;

    /**
     * Get the lib bqcp.
     *
     * @return string Returns the lib bqcp.
     */
    public function getLibBqcp() {
        return $this->libBqcp;
    }

    /**
     * Set the lib bqcp.
     *
     * @param string $libBqcp The lib bqcp.
     */
    public function setLibBqcp($libBqcp) {
        $this->libBqcp = $libBqcp;
        return $this;
    }
}
