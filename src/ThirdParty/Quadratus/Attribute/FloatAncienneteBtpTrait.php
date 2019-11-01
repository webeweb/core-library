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
 * Anciennete btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAncienneteBtpTrait {

    /**
     * Anciennete btp.
     *
     * @var float
     */
    private $ancienneteBtp;

    /**
     * Get the anciennete btp.
     *
     * @return float Returns the anciennete btp.
     */
    public function getAncienneteBtp() {
        return $this->ancienneteBtp;
    }

    /**
     * Set the anciennete btp.
     *
     * @param float $ancienneteBtp The anciennete btp.
     */
    public function setAncienneteBtp($ancienneteBtp) {
        $this->ancienneteBtp = $ancienneteBtp;
        return $this;
    }
}
