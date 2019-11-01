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
 * Cotitel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotitelTrait {

    /**
     * Cotitel.
     *
     * @var bool
     */
    private $cotitel;

    /**
     * Get the cotitel.
     *
     * @return bool Returns the cotitel.
     */
    public function getCotitel() {
        return $this->cotitel;
    }

    /**
     * Set the cotitel.
     *
     * @param bool $cotitel The cotitel.
     */
    public function setCotitel($cotitel) {
        $this->cotitel = $cotitel;
        return $this;
    }
}
