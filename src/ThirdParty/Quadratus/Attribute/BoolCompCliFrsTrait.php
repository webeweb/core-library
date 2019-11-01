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
 * Comp cli frs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompCliFrsTrait {

    /**
     * Comp cli frs.
     *
     * @var bool
     */
    private $compCliFrs;

    /**
     * Get the comp cli frs.
     *
     * @return bool Returns the comp cli frs.
     */
    public function getCompCliFrs() {
        return $this->compCliFrs;
    }

    /**
     * Set the comp cli frs.
     *
     * @param bool $compCliFrs The comp cli frs.
     */
    public function setCompCliFrs($compCliFrs) {
        $this->compCliFrs = $compCliFrs;
        return $this;
    }
}
