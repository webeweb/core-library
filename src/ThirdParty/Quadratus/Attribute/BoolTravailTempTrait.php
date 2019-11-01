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
 * Travail temp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailTempTrait {

    /**
     * Travail temp.
     *
     * @var bool
     */
    private $travailTemp;

    /**
     * Get the travail temp.
     *
     * @return bool Returns the travail temp.
     */
    public function getTravailTemp() {
        return $this->travailTemp;
    }

    /**
     * Set the travail temp.
     *
     * @param bool $travailTemp The travail temp.
     */
    public function setTravailTemp($travailTemp) {
        $this->travailTemp = $travailTemp;
        return $this;
    }
}
