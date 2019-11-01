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
 * Indemn autres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnAutresTrait {

    /**
     * Indemn autres.
     *
     * @var float
     */
    private $indemnAutres;

    /**
     * Get the indemn autres.
     *
     * @return float Returns the indemn autres.
     */
    public function getIndemnAutres() {
        return $this->indemnAutres;
    }

    /**
     * Set the indemn autres.
     *
     * @param float $indemnAutres The indemn autres.
     */
    public function setIndemnAutres($indemnAutres) {
        $this->indemnAutres = $indemnAutres;
        return $this;
    }
}
