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
 * Vmp cpt moins value trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVmpCptMoinsValueTrait {

    /**
     * Vmp cpt moins value.
     *
     * @var string
     */
    private $vmpCptMoinsValue;

    /**
     * Get the vmp cpt moins value.
     *
     * @return string Returns the vmp cpt moins value.
     */
    public function getVmpCptMoinsValue() {
        return $this->vmpCptMoinsValue;
    }

    /**
     * Set the vmp cpt moins value.
     *
     * @param string $vmpCptMoinsValue The vmp cpt moins value.
     */
    public function setVmpCptMoinsValue($vmpCptMoinsValue) {
        $this->vmpCptMoinsValue = $vmpCptMoinsValue;
        return $this;
    }
}
