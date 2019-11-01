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
 * Vir type etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirTypeEtabTrait {

    /**
     * Vir type etab.
     *
     * @var string
     */
    private $virTypeEtab;

    /**
     * Get the vir type etab.
     *
     * @return string Returns the vir type etab.
     */
    public function getVirTypeEtab() {
        return $this->virTypeEtab;
    }

    /**
     * Set the vir type etab.
     *
     * @param string $virTypeEtab The vir type etab.
     */
    public function setVirTypeEtab($virTypeEtab) {
        $this->virTypeEtab = $virTypeEtab;
        return $this;
    }
}
