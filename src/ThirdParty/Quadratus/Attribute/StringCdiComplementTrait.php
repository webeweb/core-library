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
 * Cdi complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiComplementTrait {

    /**
     * Cdi complement.
     *
     * @var string
     */
    private $cdiComplement;

    /**
     * Get the cdi complement.
     *
     * @return string Returns the cdi complement.
     */
    public function getCdiComplement() {
        return $this->cdiComplement;
    }

    /**
     * Set the cdi complement.
     *
     * @param string $cdiComplement The cdi complement.
     */
    public function setCdiComplement($cdiComplement) {
        $this->cdiComplement = $cdiComplement;
        return $this;
    }
}
