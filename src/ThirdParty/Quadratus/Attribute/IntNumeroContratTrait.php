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
 * Numero contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroContratTrait {

    /**
     * Numero contrat.
     *
     * @var int
     */
    private $numeroContrat;

    /**
     * Get the numero contrat.
     *
     * @return int Returns the numero contrat.
     */
    public function getNumeroContrat() {
        return $this->numeroContrat;
    }

    /**
     * Set the numero contrat.
     *
     * @param int $numeroContrat The numero contrat.
     */
    public function setNumeroContrat($numeroContrat) {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }
}
