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
 * Ecr type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEcrTypeTrait {

    /**
     * Ecr type.
     *
     * @var string
     */
    private $ecrType;

    /**
     * Get the ecr type.
     *
     * @return string Returns the ecr type.
     */
    public function getEcrType() {
        return $this->ecrType;
    }

    /**
     * Set the ecr type.
     *
     * @param string $ecrType The ecr type.
     */
    public function setEcrType($ecrType) {
        $this->ecrType = $ecrType;
        return $this;
    }
}
