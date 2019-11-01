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
 * Nb liasses fisc editees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLiassesFiscEditeesFactTrait {

    /**
     * Nb liasses fisc editees fact.
     *
     * @var int
     */
    private $nbLiassesFiscEditeesFact;

    /**
     * Get the nb liasses fisc editees fact.
     *
     * @return int Returns the nb liasses fisc editees fact.
     */
    public function getNbLiassesFiscEditeesFact() {
        return $this->nbLiassesFiscEditeesFact;
    }

    /**
     * Set the nb liasses fisc editees fact.
     *
     * @param int $nbLiassesFiscEditeesFact The nb liasses fisc editees fact.
     */
    public function setNbLiassesFiscEditeesFact($nbLiassesFiscEditeesFact) {
        $this->nbLiassesFiscEditeesFact = $nbLiassesFiscEditeesFact;
        return $this;
    }
}
