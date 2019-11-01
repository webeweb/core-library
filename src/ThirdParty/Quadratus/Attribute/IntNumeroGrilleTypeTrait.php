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
 * Numero grille type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroGrilleTypeTrait {

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }
}
