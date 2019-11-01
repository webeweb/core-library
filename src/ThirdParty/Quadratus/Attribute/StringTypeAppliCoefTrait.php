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
 * Type appli coef trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAppliCoefTrait {

    /**
     * Type appli coef.
     *
     * @var string
     */
    private $typeAppliCoef;

    /**
     * Get the type appli coef.
     *
     * @return string Returns the type appli coef.
     */
    public function getTypeAppliCoef() {
        return $this->typeAppliCoef;
    }

    /**
     * Set the type appli coef.
     *
     * @param string $typeAppliCoef The type appli coef.
     */
    public function setTypeAppliCoef($typeAppliCoef) {
        $this->typeAppliCoef = $typeAppliCoef;
        return $this;
    }
}
