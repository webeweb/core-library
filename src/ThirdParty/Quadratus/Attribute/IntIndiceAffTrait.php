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
 * Indice aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceAffTrait {

    /**
     * Indice aff.
     *
     * @var int
     */
    private $indiceAff;

    /**
     * Get the indice aff.
     *
     * @return int Returns the indice aff.
     */
    public function getIndiceAff() {
        return $this->indiceAff;
    }

    /**
     * Set the indice aff.
     *
     * @param int $indiceAff The indice aff.
     */
    public function setIndiceAff($indiceAff) {
        $this->indiceAff = $indiceAff;
        return $this;
    }
}
