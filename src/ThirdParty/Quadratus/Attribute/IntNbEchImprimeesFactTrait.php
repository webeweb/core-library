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
 * Nb ech imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEchImprimeesFactTrait {

    /**
     * Nb ech imprimees fact.
     *
     * @var int
     */
    private $nbEchImprimeesFact;

    /**
     * Get the nb ech imprimees fact.
     *
     * @return int Returns the nb ech imprimees fact.
     */
    public function getNbEchImprimeesFact() {
        return $this->nbEchImprimeesFact;
    }

    /**
     * Set the nb ech imprimees fact.
     *
     * @param int $nbEchImprimeesFact The nb ech imprimees fact.
     */
    public function setNbEchImprimeesFact($nbEchImprimeesFact) {
        $this->nbEchImprimeesFact = $nbEchImprimeesFact;
        return $this;
    }
}
