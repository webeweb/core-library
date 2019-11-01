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
 * Date nomination trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateNominationTrait {

    /**
     * Date nomination.
     *
     * @var DateTime|null
     */
    private $dateNomination;

    /**
     * Get the date nomination.
     *
     * @return DateTime|null Returns the date nomination.
     */
    public function getDateNomination() {
        return $this->dateNomination;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime|null $dateNomination The date nomination.
     */
    public function setDateNomination(DateTime $dateNomination = null) {
        $this->dateNomination = $dateNomination;
        return $this;
    }
}
