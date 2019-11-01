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
 * Evo cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoCadreTrait {

    /**
     * Evo cadre.
     *
     * @var bool
     */
    private $evoCadre;

    /**
     * Get the evo cadre.
     *
     * @return bool Returns the evo cadre.
     */
    public function getEvoCadre() {
        return $this->evoCadre;
    }

    /**
     * Set the evo cadre.
     *
     * @param bool $evoCadre The evo cadre.
     */
    public function setEvoCadre($evoCadre) {
        $this->evoCadre = $evoCadre;
        return $this;
    }
}
