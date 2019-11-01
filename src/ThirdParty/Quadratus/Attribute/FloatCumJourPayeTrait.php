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
 * Cum jour paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumJourPayeTrait {

    /**
     * Cum jour paye.
     *
     * @var float
     */
    private $cumJourPaye;

    /**
     * Get the cum jour paye.
     *
     * @return float Returns the cum jour paye.
     */
    public function getCumJourPaye() {
        return $this->cumJourPaye;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }
}
