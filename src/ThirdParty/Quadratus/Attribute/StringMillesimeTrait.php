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
 * Millesime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMillesimeTrait {

    /**
     * Millesime.
     *
     * @var string
     */
    private $millesime;

    /**
     * Get the millesime.
     *
     * @return string Returns the millesime.
     */
    public function getMillesime() {
        return $this->millesime;
    }

    /**
     * Set the millesime.
     *
     * @param string $millesime The millesime.
     */
    public function setMillesime($millesime) {
        $this->millesime = $millesime;
        return $this;
    }
}
