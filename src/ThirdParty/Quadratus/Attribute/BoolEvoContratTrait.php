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
 * Evo contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoContratTrait {

    /**
     * Evo contrat.
     *
     * @var bool
     */
    private $evoContrat;

    /**
     * Get the evo contrat.
     *
     * @return bool Returns the evo contrat.
     */
    public function getEvoContrat() {
        return $this->evoContrat;
    }

    /**
     * Set the evo contrat.
     *
     * @param bool $evoContrat The evo contrat.
     */
    public function setEvoContrat($evoContrat) {
        $this->evoContrat = $evoContrat;
        return $this;
    }
}
