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
 * Base brute cpbtp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseBruteCpbtpTrait {

    /**
     * Base brute cpbtp.
     *
     * @var float
     */
    private $baseBruteCpbtp;

    /**
     * Get the base brute cpbtp.
     *
     * @return float Returns the base brute cpbtp.
     */
    public function getBaseBruteCpbtp() {
        return $this->baseBruteCpbtp;
    }

    /**
     * Set the base brute cpbtp.
     *
     * @param float $baseBruteCpbtp The base brute cpbtp.
     */
    public function setBaseBruteCpbtp($baseBruteCpbtp) {
        $this->baseBruteCpbtp = $baseBruteCpbtp;
        return $this;
    }
}
