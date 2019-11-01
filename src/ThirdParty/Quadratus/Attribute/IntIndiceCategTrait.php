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
 * Indice categ trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceCategTrait {

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }
}
