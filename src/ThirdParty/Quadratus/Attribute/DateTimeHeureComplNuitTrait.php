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

use DateTime;

/**
 * Heure compl nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureComplNuitTrait {

    /**
     * Heure compl nuit.
     *
     * @var DateTime|null
     */
    private $heureComplNuit;

    /**
     * Get the heure compl nuit.
     *
     * @return DateTime|null Returns the heure compl nuit.
     */
    public function getHeureComplNuit() {
        return $this->heureComplNuit;
    }

    /**
     * Set the heure compl nuit.
     *
     * @param DateTime|null $heureComplNuit The heure compl nuit.
     */
    public function setHeureComplNuit(DateTime $heureComplNuit = null) {
        $this->heureComplNuit = $heureComplNuit;
        return $this;
    }
}
