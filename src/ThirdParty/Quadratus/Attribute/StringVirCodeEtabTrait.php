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
 * Vir code etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirCodeEtabTrait {

    /**
     * Vir code etab.
     *
     * @var string
     */
    private $virCodeEtab;

    /**
     * Get the vir code etab.
     *
     * @return string Returns the vir code etab.
     */
    public function getVirCodeEtab() {
        return $this->virCodeEtab;
    }

    /**
     * Set the vir code etab.
     *
     * @param string $virCodeEtab The vir code etab.
     */
    public function setVirCodeEtab($virCodeEtab) {
        $this->virCodeEtab = $virCodeEtab;
        return $this;
    }
}
