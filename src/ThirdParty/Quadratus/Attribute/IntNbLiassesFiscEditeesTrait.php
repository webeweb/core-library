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
 * Nb liasses fisc editees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLiassesFiscEditeesTrait {

    /**
     * Nb liasses fisc editees.
     *
     * @var int
     */
    private $nbLiassesFiscEditees;

    /**
     * Get the nb liasses fisc editees.
     *
     * @return int Returns the nb liasses fisc editees.
     */
    public function getNbLiassesFiscEditees() {
        return $this->nbLiassesFiscEditees;
    }

    /**
     * Set the nb liasses fisc editees.
     *
     * @param int $nbLiassesFiscEditees The nb liasses fisc editees.
     */
    public function setNbLiassesFiscEditees($nbLiassesFiscEditees) {
        $this->nbLiassesFiscEditees = $nbLiassesFiscEditees;
        return $this;
    }
}
