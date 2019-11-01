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
 * Fiche signee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFicheSigneeTrait {

    /**
     * Fiche signee.
     *
     * @var bool
     */
    private $ficheSignee;

    /**
     * Get the fiche signee.
     *
     * @return bool Returns the fiche signee.
     */
    public function getFicheSignee() {
        return $this->ficheSignee;
    }

    /**
     * Set the fiche signee.
     *
     * @param bool $ficheSignee The fiche signee.
     */
    public function setFicheSignee($ficheSignee) {
        $this->ficheSignee = $ficheSignee;
        return $this;
    }
}
