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
 * Code obligation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeObligationTrait {

    /**
     * Code obligation.
     *
     * @var string
     */
    private $codeObligation;

    /**
     * Get the code obligation.
     *
     * @return string Returns the code obligation.
     */
    public function getCodeObligation() {
        return $this->codeObligation;
    }

    /**
     * Set the code obligation.
     *
     * @param string $codeObligation The code obligation.
     */
    public function setCodeObligation($codeObligation) {
        $this->codeObligation = $codeObligation;
        return $this;
    }
}
