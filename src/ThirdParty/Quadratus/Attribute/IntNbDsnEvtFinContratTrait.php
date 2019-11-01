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
 * Nb dsn evt fin contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtFinContratTrait {

    /**
     * Nb dsn evt fin contrat.
     *
     * @var int
     */
    private $nbDsnEvtFinContrat;

    /**
     * Get the nb dsn evt fin contrat.
     *
     * @return int Returns the nb dsn evt fin contrat.
     */
    public function getNbDsnEvtFinContrat() {
        return $this->nbDsnEvtFinContrat;
    }

    /**
     * Set the nb dsn evt fin contrat.
     *
     * @param int $nbDsnEvtFinContrat The nb dsn evt fin contrat.
     */
    public function setNbDsnEvtFinContrat($nbDsnEvtFinContrat) {
        $this->nbDsnEvtFinContrat = $nbDsnEvtFinContrat;
        return $this;
    }
}
