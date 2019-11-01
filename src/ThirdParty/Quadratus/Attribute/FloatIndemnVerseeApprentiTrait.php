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
 * Indemn versee apprenti trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnVerseeApprentiTrait {

    /**
     * Indemn versee apprenti.
     *
     * @var float
     */
    private $indemnVerseeApprenti;

    /**
     * Get the indemn versee apprenti.
     *
     * @return float Returns the indemn versee apprenti.
     */
    public function getIndemnVerseeApprenti() {
        return $this->indemnVerseeApprenti;
    }

    /**
     * Set the indemn versee apprenti.
     *
     * @param float $indemnVerseeApprenti The indemn versee apprenti.
     */
    public function setIndemnVerseeApprenti($indemnVerseeApprenti) {
        $this->indemnVerseeApprenti = $indemnVerseeApprenti;
        return $this;
    }
}
