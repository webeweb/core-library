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
 * Nb bal agee imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalAgeeImprimeesFactTrait {

    /**
     * Nb bal agee imprimees fact.
     *
     * @var int
     */
    private $nbBalAgeeImprimeesFact;

    /**
     * Get the nb bal agee imprimees fact.
     *
     * @return int Returns the nb bal agee imprimees fact.
     */
    public function getNbBalAgeeImprimeesFact() {
        return $this->nbBalAgeeImprimeesFact;
    }

    /**
     * Set the nb bal agee imprimees fact.
     *
     * @param int $nbBalAgeeImprimeesFact The nb bal agee imprimees fact.
     */
    public function setNbBalAgeeImprimeesFact($nbBalAgeeImprimeesFact) {
        $this->nbBalAgeeImprimeesFact = $nbBalAgeeImprimeesFact;
        return $this;
    }
}
