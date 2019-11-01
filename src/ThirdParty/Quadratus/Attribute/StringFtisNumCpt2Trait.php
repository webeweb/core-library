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
 * Ftis num cpt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFtisNumCpt2Trait {

    /**
     * Ftis num cpt2.
     *
     * @var string
     */
    private $ftisNumCpt2;

    /**
     * Get the ftis num cpt2.
     *
     * @return string Returns the ftis num cpt2.
     */
    public function getFtisNumCpt2() {
        return $this->ftisNumCpt2;
    }

    /**
     * Set the ftis num cpt2.
     *
     * @param string $ftisNumCpt2 The ftis num cpt2.
     */
    public function setFtisNumCpt2($ftisNumCpt2) {
        $this->ftisNumCpt2 = $ftisNumCpt2;
        return $this;
    }
}
