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
 * Numero employe contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroEmployeContratTrait {

    /**
     * Numero employe contrat.
     *
     * @var string
     */
    private $numeroEmployeContrat;

    /**
     * Get the numero employe contrat.
     *
     * @return string Returns the numero employe contrat.
     */
    public function getNumeroEmployeContrat() {
        return $this->numeroEmployeContrat;
    }

    /**
     * Set the numero employe contrat.
     *
     * @param string $numeroEmployeContrat The numero employe contrat.
     */
    public function setNumeroEmployeContrat($numeroEmployeContrat) {
        $this->numeroEmployeContrat = $numeroEmployeContrat;
        return $this;
    }
}
