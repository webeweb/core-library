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
 * Ad int complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntComplementTrait {

    /**
     * Ad int complement.
     *
     * @var string
     */
    private $adIntComplement;

    /**
     * Get the ad int complement.
     *
     * @return string Returns the ad int complement.
     */
    public function getAdIntComplement() {
        return $this->adIntComplement;
    }

    /**
     * Set the ad int complement.
     *
     * @param string $adIntComplement The ad int complement.
     */
    public function setAdIntComplement($adIntComplement) {
        $this->adIntComplement = $adIntComplement;
        return $this;
    }
}
