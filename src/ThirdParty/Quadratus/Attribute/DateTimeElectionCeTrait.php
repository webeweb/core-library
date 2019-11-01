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
 * Election ce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeElectionCeTrait {

    /**
     * Election ce.
     *
     * @var DateTime|null
     */
    private $electionCe;

    /**
     * Get the election ce.
     *
     * @return DateTime|null Returns the election ce.
     */
    public function getElectionCe() {
        return $this->electionCe;
    }

    /**
     * Set the election ce.
     *
     * @param DateTime|null $electionCe The election ce.
     */
    public function setElectionCe(DateTime $electionCe = null) {
        $this->electionCe = $electionCe;
        return $this;
    }
}
