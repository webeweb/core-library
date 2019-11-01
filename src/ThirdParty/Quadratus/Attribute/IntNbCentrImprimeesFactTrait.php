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
 * Nb centr imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCentrImprimeesFactTrait {

    /**
     * Nb centr imprimees fact.
     *
     * @var int
     */
    private $nbCentrImprimeesFact;

    /**
     * Get the nb centr imprimees fact.
     *
     * @return int Returns the nb centr imprimees fact.
     */
    public function getNbCentrImprimeesFact() {
        return $this->nbCentrImprimeesFact;
    }

    /**
     * Set the nb centr imprimees fact.
     *
     * @param int $nbCentrImprimeesFact The nb centr imprimees fact.
     */
    public function setNbCentrImprimeesFact($nbCentrImprimeesFact) {
        $this->nbCentrImprimeesFact = $nbCentrImprimeesFact;
        return $this;
    }
}
