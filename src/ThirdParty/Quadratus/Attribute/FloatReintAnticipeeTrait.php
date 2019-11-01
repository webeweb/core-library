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
 * Reint anticipee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReintAnticipeeTrait {

    /**
     * Reint anticipee.
     *
     * @var float
     */
    private $reintAnticipee;

    /**
     * Get the reint anticipee.
     *
     * @return float Returns the reint anticipee.
     */
    public function getReintAnticipee() {
        return $this->reintAnticipee;
    }

    /**
     * Set the reint anticipee.
     *
     * @param float $reintAnticipee The reint anticipee.
     */
    public function setReintAnticipee($reintAnticipee) {
        $this->reintAnticipee = $reintAnticipee;
        return $this;
    }
}
