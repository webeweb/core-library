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
trait StringColonneTrait {

    /**
     * Colonne.
     *
     * @var string
     */
    private $colonne;

    /**
     * Get the colonne.
     *
     * @return string Returns the colonne.
     */
    public function getColonne() {
        return $this->colonne;
    }

    /**
     * Set the colonne.
     *
     * @param string $colonne The colonne.
     */
    public function setColonne($colonne) {
        $this->colonne = $colonne;
        return $this;
    }
}
