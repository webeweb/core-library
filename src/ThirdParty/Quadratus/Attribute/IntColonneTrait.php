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
 * Colonne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntColonneTrait {

    /**
     * Colonne.
     *
     * @var int
     */
    private $colonne;

    /**
     * Get the colonne.
     *
     * @return int Returns the colonne.
     */
    public function getColonne() {
        return $this->colonne;
    }

    /**
     * Set the colonne.
     *
     * @param int $colonne The colonne.
     */
    public function setColonne($colonne) {
        $this->colonne = $colonne;
        return $this;
    }
}
