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
 * Nbh jour rtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhJourRttTrait {

    /**
     * Nbh jour rtt.
     *
     * @var float
     */
    private $nbhJourRtt;

    /**
     * Get the nbh jour rtt.
     *
     * @return float Returns the nbh jour rtt.
     */
    public function getNbhJourRtt() {
        return $this->nbhJourRtt;
    }

    /**
     * Set the nbh jour rtt.
     *
     * @param float $nbhJourRtt The nbh jour rtt.
     */
    public function setNbhJourRtt($nbhJourRtt) {
        $this->nbhJourRtt = $nbhJourRtt;
        return $this;
    }
}
