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
 * Pourc maj h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcMajHComplTrait {

    /**
     * Pourc maj h compl.
     *
     * @var float
     */
    private $pourcMajHCompl;

    /**
     * Get the pourc maj h compl.
     *
     * @return float Returns the pourc maj h compl.
     */
    public function getPourcMajHCompl() {
        return $this->pourcMajHCompl;
    }

    /**
     * Set the pourc maj h compl.
     *
     * @param float $pourcMajHCompl The pourc maj h compl.
     */
    public function setPourcMajHCompl($pourcMajHCompl) {
        $this->pourcMajHCompl = $pourcMajHCompl;
        return $this;
    }
}
