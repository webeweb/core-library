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
 * Credit imputer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreditImputerTrait {

    /**
     * Credit imputer.
     *
     * @var bool
     */
    private $creditImputer;

    /**
     * Get the credit imputer.
     *
     * @return bool Returns the credit imputer.
     */
    public function getCreditImputer() {
        return $this->creditImputer;
    }

    /**
     * Set the credit imputer.
     *
     * @param bool $creditImputer The credit imputer.
     */
    public function setCreditImputer($creditImputer) {
        $this->creditImputer = $creditImputer;
        return $this;
    }
}
