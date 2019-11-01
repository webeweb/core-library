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
 * Millesime1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMillesime1Trait {

    /**
     * Millesime1.
     *
     * @var int
     */
    private $millesime1;

    /**
     * Get the millesime1.
     *
     * @return int Returns the millesime1.
     */
    public function getMillesime1() {
        return $this->millesime1;
    }

    /**
     * Set the millesime1.
     *
     * @param int $millesime1 The millesime1.
     */
    public function setMillesime1($millesime1) {
        $this->millesime1 = $millesime1;
        return $this;
    }
}
