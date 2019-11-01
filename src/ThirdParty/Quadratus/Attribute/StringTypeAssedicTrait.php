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
 * Type assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAssedicTrait {

    /**
     * Type assedic.
     *
     * @var string
     */
    private $typeAssedic;

    /**
     * Get the type assedic.
     *
     * @return string Returns the type assedic.
     */
    public function getTypeAssedic() {
        return $this->typeAssedic;
    }

    /**
     * Set the type assedic.
     *
     * @param string $typeAssedic The type assedic.
     */
    public function setTypeAssedic($typeAssedic) {
        $this->typeAssedic = $typeAssedic;
        return $this;
    }
}
