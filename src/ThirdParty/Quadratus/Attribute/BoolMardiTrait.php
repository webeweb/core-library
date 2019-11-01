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
 * Mardi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMardiTrait {

    /**
     * Mardi.
     *
     * @var bool
     */
    private $mardi;

    /**
     * Get the mardi.
     *
     * @return bool Returns the mardi.
     */
    public function getMardi() {
        return $this->mardi;
    }

    /**
     * Set the mardi.
     *
     * @param bool $mardi The mardi.
     */
    public function setMardi($mardi) {
        $this->mardi = $mardi;
        return $this;
    }
}
