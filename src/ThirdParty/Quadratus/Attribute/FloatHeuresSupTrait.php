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
 * Heures sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresSupTrait {

    /**
     * Heures sup.
     *
     * @var float
     */
    private $heuresSup;

    /**
     * Get the heures sup.
     *
     * @return float Returns the heures sup.
     */
    public function getHeuresSup() {
        return $this->heuresSup;
    }

    /**
     * Set the heures sup.
     *
     * @param float $heuresSup The heures sup.
     */
    public function setHeuresSup($heuresSup) {
        $this->heuresSup = $heuresSup;
        return $this;
    }
}
