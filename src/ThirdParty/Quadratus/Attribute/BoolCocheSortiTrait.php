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
 * Coche sorti trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCocheSortiTrait {

    /**
     * Coche sorti.
     *
     * @var bool
     */
    private $cocheSorti;

    /**
     * Get the coche sorti.
     *
     * @return bool Returns the coche sorti.
     */
    public function getCocheSorti() {
        return $this->cocheSorti;
    }

    /**
     * Set the coche sorti.
     *
     * @param bool $cocheSorti The coche sorti.
     */
    public function setCocheSorti($cocheSorti) {
        $this->cocheSorti = $cocheSorti;
        return $this;
    }
}
