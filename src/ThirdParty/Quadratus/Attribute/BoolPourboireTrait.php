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
 * Pourboire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPourboireTrait {

    /**
     * Pourboire.
     *
     * @var bool
     */
    private $pourboire;

    /**
     * Get the pourboire.
     *
     * @return bool Returns the pourboire.
     */
    public function getPourboire() {
        return $this->pourboire;
    }

    /**
     * Set the pourboire.
     *
     * @param bool $pourboire The pourboire.
     */
    public function setPourboire($pourboire) {
        $this->pourboire = $pourboire;
        return $this;
    }
}
