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
 * Nom pere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomPereTrait {

    /**
     * Nom pere.
     *
     * @var string
     */
    private $nomPere;

    /**
     * Get the nom pere.
     *
     * @return string Returns the nom pere.
     */
    public function getNomPere() {
        return $this->nomPere;
    }

    /**
     * Set the nom pere.
     *
     * @param string $nomPere The nom pere.
     */
    public function setNomPere($nomPere) {
        $this->nomPere = $nomPere;
        return $this;
    }
}
