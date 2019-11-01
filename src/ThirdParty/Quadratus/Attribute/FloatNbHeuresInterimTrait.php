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
 * Nb heures interim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresInterimTrait {

    /**
     * Nb heures interim.
     *
     * @var float
     */
    private $nbHeuresInterim;

    /**
     * Get the nb heures interim.
     *
     * @return float Returns the nb heures interim.
     */
    public function getNbHeuresInterim() {
        return $this->nbHeuresInterim;
    }

    /**
     * Set the nb heures interim.
     *
     * @param float $nbHeuresInterim The nb heures interim.
     */
    public function setNbHeuresInterim($nbHeuresInterim) {
        $this->nbHeuresInterim = $nbHeuresInterim;
        return $this;
    }
}
