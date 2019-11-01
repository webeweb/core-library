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
 * Hotellerie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHotellerieTrait {

    /**
     * Hotellerie.
     *
     * @var bool
     */
    private $hotellerie;

    /**
     * Get the hotellerie.
     *
     * @return bool Returns the hotellerie.
     */
    public function getHotellerie() {
        return $this->hotellerie;
    }

    /**
     * Set the hotellerie.
     *
     * @param bool $hotellerie The hotellerie.
     */
    public function setHotellerie($hotellerie) {
        $this->hotellerie = $hotellerie;
        return $this;
    }
}
