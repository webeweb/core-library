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
 * Numero historique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroHistoriqueTrait {

    /**
     * Numero historique.
     *
     * @var int
     */
    private $numeroHistorique;

    /**
     * Get the numero historique.
     *
     * @return int Returns the numero historique.
     */
    public function getNumeroHistorique() {
        return $this->numeroHistorique;
    }

    /**
     * Set the numero historique.
     *
     * @param int $numeroHistorique The numero historique.
     */
    public function setNumeroHistorique($numeroHistorique) {
        $this->numeroHistorique = $numeroHistorique;
        return $this;
    }
}
