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
 * Indice rectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceRectifTrait {

    /**
     * Indice rectif.
     *
     * @var int
     */
    private $indiceRectif;

    /**
     * Get the indice rectif.
     *
     * @return int Returns the indice rectif.
     */
    public function getIndiceRectif() {
        return $this->indiceRectif;
    }

    /**
     * Set the indice rectif.
     *
     * @param int $indiceRectif The indice rectif.
     */
    public function setIndiceRectif($indiceRectif) {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }
}
