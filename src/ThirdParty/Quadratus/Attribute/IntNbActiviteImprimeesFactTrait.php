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
 * Nb activite imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbActiviteImprimeesFactTrait {

    /**
     * Nb activite imprimees fact.
     *
     * @var int
     */
    private $nbActiviteImprimeesFact;

    /**
     * Get the nb activite imprimees fact.
     *
     * @return int Returns the nb activite imprimees fact.
     */
    public function getNbActiviteImprimeesFact() {
        return $this->nbActiviteImprimeesFact;
    }

    /**
     * Set the nb activite imprimees fact.
     *
     * @param int $nbActiviteImprimeesFact The nb activite imprimees fact.
     */
    public function setNbActiviteImprimeesFact($nbActiviteImprimeesFact) {
        $this->nbActiviteImprimeesFact = $nbActiviteImprimeesFact;
        return $this;
    }
}
