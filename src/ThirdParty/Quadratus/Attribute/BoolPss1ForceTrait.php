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
 * Pss1 force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPss1ForceTrait {

    /**
     * Pss1 force.
     *
     * @var bool
     */
    private $pss1Force;

    /**
     * Get the pss1 force.
     *
     * @return bool Returns the pss1 force.
     */
    public function getPss1Force() {
        return $this->pss1Force;
    }

    /**
     * Set the pss1 force.
     *
     * @param bool $pss1Force The pss1 force.
     */
    public function setPss1Force($pss1Force) {
        $this->pss1Force = $pss1Force;
        return $this;
    }
}
