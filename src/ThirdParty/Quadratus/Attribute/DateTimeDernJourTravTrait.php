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
 * Dern jour trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDernJourTravTrait {

    /**
     * Dern jour trav.
     *
     * @var DateTime|null
     */
    private $dernJourTrav;

    /**
     * Get the dern jour trav.
     *
     * @return DateTime|null Returns the dern jour trav.
     */
    public function getDernJourTrav() {
        return $this->dernJourTrav;
    }

    /**
     * Set the dern jour trav.
     *
     * @param DateTime|null $dernJourTrav The dern jour trav.
     */
    public function setDernJourTrav(DateTime $dernJourTrav = null) {
        $this->dernJourTrav = $dernJourTrav;
        return $this;
    }
}
