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
 * Type stc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeStcTrait {

    /**
     * Type stc.
     *
     * @var string
     */
    private $typeStc;

    /**
     * Get the type stc.
     *
     * @return string Returns the type stc.
     */
    public function getTypeStc() {
        return $this->typeStc;
    }

    /**
     * Set the type stc.
     *
     * @param string $typeStc The type stc.
     */
    public function setTypeStc($typeStc) {
        $this->typeStc = $typeStc;
        return $this;
    }
}
