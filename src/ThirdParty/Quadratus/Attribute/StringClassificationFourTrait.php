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
 * Classification four trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClassificationFourTrait {

    /**
     * Classification four.
     *
     * @var string
     */
    private $classificationFour;

    /**
     * Get the classification four.
     *
     * @return string Returns the classification four.
     */
    public function getClassificationFour() {
        return $this->classificationFour;
    }

    /**
     * Set the classification four.
     *
     * @param string $classificationFour The classification four.
     */
    public function setClassificationFour($classificationFour) {
        $this->classificationFour = $classificationFour;
        return $this;
    }
}
