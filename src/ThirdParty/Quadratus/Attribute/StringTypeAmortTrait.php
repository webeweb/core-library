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
 * Type amort trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAmortTrait {

    /**
     * Type amort.
     *
     * @var string
     */
    private $typeAmort;

    /**
     * Get the type amort.
     *
     * @return string Returns the type amort.
     */
    public function getTypeAmort() {
        return $this->typeAmort;
    }

    /**
     * Set the type amort.
     *
     * @param string $typeAmort The type amort.
     */
    public function setTypeAmort($typeAmort) {
        $this->typeAmort = $typeAmort;
        return $this;
    }
}
