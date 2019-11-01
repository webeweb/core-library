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
 * Avec etat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecEtatTrait {

    /**
     * Avec etat.
     *
     * @var bool
     */
    private $avecEtat;

    /**
     * Get the avec etat.
     *
     * @return bool Returns the avec etat.
     */
    public function getAvecEtat() {
        return $this->avecEtat;
    }

    /**
     * Set the avec etat.
     *
     * @param bool $avecEtat The avec etat.
     */
    public function setAvecEtat($avecEtat) {
        $this->avecEtat = $avecEtat;
        return $this;
    }
}
