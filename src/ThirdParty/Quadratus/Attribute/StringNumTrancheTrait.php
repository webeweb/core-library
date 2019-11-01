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
 * Num tranche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumTrancheTrait {

    /**
     * Num tranche.
     *
     * @var string
     */
    private $numTranche;

    /**
     * Get the num tranche.
     *
     * @return string Returns the num tranche.
     */
    public function getNumTranche() {
        return $this->numTranche;
    }

    /**
     * Set the num tranche.
     *
     * @param string $numTranche The num tranche.
     */
    public function setNumTranche($numTranche) {
        $this->numTranche = $numTranche;
        return $this;
    }
}
