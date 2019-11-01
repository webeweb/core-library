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
 * Id historique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdHistoriqueTrait {

    /**
     * Id historique.
     *
     * @var int
     */
    private $idHistorique;

    /**
     * Get the id historique.
     *
     * @return int Returns the id historique.
     */
    public function getIdHistorique() {
        return $this->idHistorique;
    }

    /**
     * Set the id historique.
     *
     * @param int $idHistorique The id historique.
     */
    public function setIdHistorique($idHistorique) {
        $this->idHistorique = $idHistorique;
        return $this;
    }
}
