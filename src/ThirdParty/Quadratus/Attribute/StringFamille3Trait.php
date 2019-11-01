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
 * Famille3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille3Trait {

    /**
     * Famille3.
     *
     * @var string
     */
    private $famille3;

    /**
     * Get the famille3.
     *
     * @return string Returns the famille3.
     */
    public function getFamille3() {
        return $this->famille3;
    }

    /**
     * Set the famille3.
     *
     * @param string $famille3 The famille3.
     */
    public function setFamille3($famille3) {
        $this->famille3 = $famille3;
        return $this;
    }
}
