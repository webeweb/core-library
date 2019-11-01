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
 * Base brute cot oppbtp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseBruteCotOppbtpTrait {

    /**
     * Base brute cot oppbtp.
     *
     * @var float
     */
    private $baseBruteCotOppbtp;

    /**
     * Get the base brute cot oppbtp.
     *
     * @return float Returns the base brute cot oppbtp.
     */
    public function getBaseBruteCotOppbtp() {
        return $this->baseBruteCotOppbtp;
    }

    /**
     * Set the base brute cot oppbtp.
     *
     * @param float $baseBruteCotOppbtp The base brute cot oppbtp.
     */
    public function setBaseBruteCotOppbtp($baseBruteCotOppbtp) {
        $this->baseBruteCotOppbtp = $baseBruteCotOppbtp;
        return $this;
    }
}
