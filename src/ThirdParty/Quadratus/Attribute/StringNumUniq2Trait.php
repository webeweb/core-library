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
 * Num uniq2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumUniq2Trait {

    /**
     * Num uniq2.
     *
     * @var string
     */
    private $numUniq2;

    /**
     * Get the num uniq2.
     *
     * @return string Returns the num uniq2.
     */
    public function getNumUniq2() {
        return $this->numUniq2;
    }

    /**
     * Set the num uniq2.
     *
     * @param string $numUniq2 The num uniq2.
     */
    public function setNumUniq2($numUniq2) {
        $this->numUniq2 = $numUniq2;
        return $this;
    }
}
