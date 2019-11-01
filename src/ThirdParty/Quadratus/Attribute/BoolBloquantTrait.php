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
 * Bloquant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBloquantTrait {

    /**
     * Bloquant.
     *
     * @var bool
     */
    private $bloquant;

    /**
     * Get the bloquant.
     *
     * @return bool Returns the bloquant.
     */
    public function getBloquant() {
        return $this->bloquant;
    }

    /**
     * Set the bloquant.
     *
     * @param bool $bloquant The bloquant.
     */
    public function setBloquant($bloquant) {
        $this->bloquant = $bloquant;
        return $this;
    }
}
