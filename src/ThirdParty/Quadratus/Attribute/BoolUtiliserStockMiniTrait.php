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
 * Utiliser stock mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUtiliserStockMiniTrait {

    /**
     * Utiliser stock mini.
     *
     * @var bool
     */
    private $utiliserStockMini;

    /**
     * Get the utiliser stock mini.
     *
     * @return bool Returns the utiliser stock mini.
     */
    public function getUtiliserStockMini() {
        return $this->utiliserStockMini;
    }

    /**
     * Set the utiliser stock mini.
     *
     * @param bool $utiliserStockMini The utiliser stock mini.
     */
    public function setUtiliserStockMini($utiliserStockMini) {
        $this->utiliserStockMini = $utiliserStockMini;
        return $this;
    }
}
