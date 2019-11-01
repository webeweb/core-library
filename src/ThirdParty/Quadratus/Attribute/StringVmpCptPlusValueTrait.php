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
 * Vmp cpt plus value trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVmpCptPlusValueTrait {

    /**
     * Vmp cpt plus value.
     *
     * @var string
     */
    private $vmpCptPlusValue;

    /**
     * Get the vmp cpt plus value.
     *
     * @return string Returns the vmp cpt plus value.
     */
    public function getVmpCptPlusValue() {
        return $this->vmpCptPlusValue;
    }

    /**
     * Set the vmp cpt plus value.
     *
     * @param string $vmpCptPlusValue The vmp cpt plus value.
     */
    public function setVmpCptPlusValue($vmpCptPlusValue) {
        $this->vmpCptPlusValue = $vmpCptPlusValue;
        return $this;
    }
}
