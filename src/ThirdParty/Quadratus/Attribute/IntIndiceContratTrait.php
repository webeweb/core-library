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
 * Indice contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceContratTrait {

    /**
     * Indice contrat.
     *
     * @var int
     */
    private $indiceContrat;

    /**
     * Get the indice contrat.
     *
     * @return int Returns the indice contrat.
     */
    public function getIndiceContrat() {
        return $this->indiceContrat;
    }

    /**
     * Set the indice contrat.
     *
     * @param int $indiceContrat The indice contrat.
     */
    public function setIndiceContrat($indiceContrat) {
        $this->indiceContrat = $indiceContrat;
        return $this;
    }
}
