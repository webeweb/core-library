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
 * Rm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRmTrait {

    /**
     * Rm.
     *
     * @var string
     */
    private $rm;

    /**
     * Get the rm.
     *
     * @return string Returns the rm.
     */
    public function getRm() {
        return $this->rm;
    }

    /**
     * Set the rm.
     *
     * @param string $rm The rm.
     */
    public function setRm($rm) {
        $this->rm = $rm;
        return $this;
    }
}
