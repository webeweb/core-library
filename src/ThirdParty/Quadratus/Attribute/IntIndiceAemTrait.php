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
 * Indice aem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceAemTrait {

    /**
     * Indice aem.
     *
     * @var int
     */
    private $indiceAem;

    /**
     * Get the indice aem.
     *
     * @return int Returns the indice aem.
     */
    public function getIndiceAem() {
        return $this->indiceAem;
    }

    /**
     * Set the indice aem.
     *
     * @param int $indiceAem The indice aem.
     */
    public function setIndiceAem($indiceAem) {
        $this->indiceAem = $indiceAem;
        return $this;
    }
}
