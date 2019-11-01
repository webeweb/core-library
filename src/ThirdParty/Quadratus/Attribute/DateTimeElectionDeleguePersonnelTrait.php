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
 * Election delegue personnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeElectionDeleguePersonnelTrait {

    /**
     * Election delegue personnel.
     *
     * @var DateTime|null
     */
    private $electionDeleguePersonnel;

    /**
     * Get the election delegue personnel.
     *
     * @return DateTime|null Returns the election delegue personnel.
     */
    public function getElectionDeleguePersonnel() {
        return $this->electionDeleguePersonnel;
    }

    /**
     * Set the election delegue personnel.
     *
     * @param DateTime|null $electionDeleguePersonnel The election delegue personnel.
     */
    public function setElectionDeleguePersonnel(DateTime $electionDeleguePersonnel = null) {
        $this->electionDeleguePersonnel = $electionDeleguePersonnel;
        return $this;
    }
}
