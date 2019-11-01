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
 * Unite date ancien branche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteDateAncienBrancheTrait {

    /**
     * Unite date ancien branche.
     *
     * @var string
     */
    private $uniteDateAncienBranche;

    /**
     * Get the unite date ancien branche.
     *
     * @return string Returns the unite date ancien branche.
     */
    public function getUniteDateAncienBranche() {
        return $this->uniteDateAncienBranche;
    }

    /**
     * Set the unite date ancien branche.
     *
     * @param string $uniteDateAncienBranche The unite date ancien branche.
     */
    public function setUniteDateAncienBranche($uniteDateAncienBranche) {
        $this->uniteDateAncienBranche = $uniteDateAncienBranche;
        return $this;
    }
}
