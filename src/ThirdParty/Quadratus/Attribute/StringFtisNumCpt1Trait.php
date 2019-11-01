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
 * Ftis num cpt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFtisNumCpt1Trait {

    /**
     * Ftis num cpt1.
     *
     * @var string
     */
    private $ftisNumCpt1;

    /**
     * Get the ftis num cpt1.
     *
     * @return string Returns the ftis num cpt1.
     */
    public function getFtisNumCpt1() {
        return $this->ftisNumCpt1;
    }

    /**
     * Set the ftis num cpt1.
     *
     * @param string $ftisNumCpt1 The ftis num cpt1.
     */
    public function setFtisNumCpt1($ftisNumCpt1) {
        $this->ftisNumCpt1 = $ftisNumCpt1;
        return $this;
    }
}
