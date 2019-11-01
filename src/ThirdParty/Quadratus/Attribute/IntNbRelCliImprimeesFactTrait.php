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
 * Nb rel cli imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbRelCliImprimeesFactTrait {

    /**
     * Nb rel cli imprimees fact.
     *
     * @var int
     */
    private $nbRelCliImprimeesFact;

    /**
     * Get the nb rel cli imprimees fact.
     *
     * @return int Returns the nb rel cli imprimees fact.
     */
    public function getNbRelCliImprimeesFact() {
        return $this->nbRelCliImprimeesFact;
    }

    /**
     * Set the nb rel cli imprimees fact.
     *
     * @param int $nbRelCliImprimeesFact The nb rel cli imprimees fact.
     */
    public function setNbRelCliImprimeesFact($nbRelCliImprimeesFact) {
        $this->nbRelCliImprimeesFact = $nbRelCliImprimeesFact;
        return $this;
    }
}
