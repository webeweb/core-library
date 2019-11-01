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
 * Nb30 renouv cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNb30RenouvCddTrait {

    /**
     * Nb30 renouv cdd.
     *
     * @var int
     */
    private $nb30RenouvCdd;

    /**
     * Get the nb30 renouv cdd.
     *
     * @return int Returns the nb30 renouv cdd.
     */
    public function getNb30RenouvCdd() {
        return $this->nb30RenouvCdd;
    }

    /**
     * Set the nb30 renouv cdd.
     *
     * @param int $nb30RenouvCdd The nb30 renouv cdd.
     */
    public function setNb30RenouvCdd($nb30RenouvCdd) {
        $this->nb30RenouvCdd = $nb30RenouvCdd;
        return $this;
    }
}
