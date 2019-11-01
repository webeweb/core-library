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
 * Gestion td bilaterale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionTdBilateraleTrait {

    /**
     * Gestion td bilaterale.
     *
     * @var bool
     */
    private $gestionTdBilaterale;

    /**
     * Get the gestion td bilaterale.
     *
     * @return bool Returns the gestion td bilaterale.
     */
    public function getGestionTdBilaterale() {
        return $this->gestionTdBilaterale;
    }

    /**
     * Set the gestion td bilaterale.
     *
     * @param bool $gestionTdBilaterale The gestion td bilaterale.
     */
    public function setGestionTdBilaterale($gestionTdBilaterale) {
        $this->gestionTdBilaterale = $gestionTdBilaterale;
        return $this;
    }
}
