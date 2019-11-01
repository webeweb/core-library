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
 * Immo detail lignes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoDetailLignesTrait {

    /**
     * Immo detail lignes.
     *
     * @var bool
     */
    private $immoDetailLignes;

    /**
     * Get the immo detail lignes.
     *
     * @return bool Returns the immo detail lignes.
     */
    public function getImmoDetailLignes() {
        return $this->immoDetailLignes;
    }

    /**
     * Set the immo detail lignes.
     *
     * @param bool $immoDetailLignes The immo detail lignes.
     */
    public function setImmoDetailLignes($immoDetailLignes) {
        $this->immoDetailLignes = $immoDetailLignes;
        return $this;
    }
}
