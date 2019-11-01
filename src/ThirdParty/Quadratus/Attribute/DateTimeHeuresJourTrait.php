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
 * Heures jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeuresJourTrait {

    /**
     * Heures jour.
     *
     * @var DateTime|null
     */
    private $heuresJour;

    /**
     * Get the heures jour.
     *
     * @return DateTime|null Returns the heures jour.
     */
    public function getHeuresJour() {
        return $this->heuresJour;
    }

    /**
     * Set the heures jour.
     *
     * @param DateTime|null $heuresJour The heures jour.
     */
    public function setHeuresJour(DateTime $heuresJour = null) {
        $this->heuresJour = $heuresJour;
        return $this;
    }
}
