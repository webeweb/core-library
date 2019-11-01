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
 * Nb bal imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalImprimeesFactTrait {

    /**
     * Nb bal imprimees fact.
     *
     * @var int
     */
    private $nbBalImprimeesFact;

    /**
     * Get the nb bal imprimees fact.
     *
     * @return int Returns the nb bal imprimees fact.
     */
    public function getNbBalImprimeesFact() {
        return $this->nbBalImprimeesFact;
    }

    /**
     * Set the nb bal imprimees fact.
     *
     * @param int $nbBalImprimeesFact The nb bal imprimees fact.
     */
    public function setNbBalImprimeesFact($nbBalImprimeesFact) {
        $this->nbBalImprimeesFact = $nbBalImprimeesFact;
        return $this;
    }
}
