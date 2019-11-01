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
 * Libelle plus de30 carac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLibellePlusDe30CaracTrait {

    /**
     * Libelle plus de30 carac.
     *
     * @var bool
     */
    private $libellePlusDe30Carac;

    /**
     * Get the libelle plus de30 carac.
     *
     * @return bool Returns the libelle plus de30 carac.
     */
    public function getLibellePlusDe30Carac() {
        return $this->libellePlusDe30Carac;
    }

    /**
     * Set the libelle plus de30 carac.
     *
     * @param bool $libellePlusDe30Carac The libelle plus de30 carac.
     */
    public function setLibellePlusDe30Carac($libellePlusDe30Carac) {
        $this->libellePlusDe30Carac = $libellePlusDe30Carac;
        return $this;
    }
}
