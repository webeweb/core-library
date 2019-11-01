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
 * Hcr payees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHcrPayeesTrait {

    /**
     * Hcr payees.
     *
     * @var bool
     */
    private $hcrPayees;

    /**
     * Get the hcr payees.
     *
     * @return bool Returns the hcr payees.
     */
    public function getHcrPayees() {
        return $this->hcrPayees;
    }

    /**
     * Set the hcr payees.
     *
     * @param bool $hcrPayees The hcr payees.
     */
    public function setHcrPayees($hcrPayees) {
        $this->hcrPayees = $hcrPayees;
        return $this;
    }
}
