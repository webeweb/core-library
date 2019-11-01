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
 * Base brute cot ccpbtp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseBruteCotCcpbtpTrait {

    /**
     * Base brute cot ccpbtp.
     *
     * @var float
     */
    private $baseBruteCotCcpbtp;

    /**
     * Get the base brute cot ccpbtp.
     *
     * @return float Returns the base brute cot ccpbtp.
     */
    public function getBaseBruteCotCcpbtp() {
        return $this->baseBruteCotCcpbtp;
    }

    /**
     * Set the base brute cot ccpbtp.
     *
     * @param float $baseBruteCotCcpbtp The base brute cot ccpbtp.
     */
    public function setBaseBruteCotCcpbtp($baseBruteCotCcpbtp) {
        $this->baseBruteCotCcpbtp = $baseBruteCotCcpbtp;
        return $this;
    }
}
