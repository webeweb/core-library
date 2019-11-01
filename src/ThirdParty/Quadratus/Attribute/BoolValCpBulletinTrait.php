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
 * Val cp bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolValCpBulletinTrait {

    /**
     * Val cp bulletin.
     *
     * @var bool
     */
    private $valCpBulletin;

    /**
     * Get the val cp bulletin.
     *
     * @return bool Returns the val cp bulletin.
     */
    public function getValCpBulletin() {
        return $this->valCpBulletin;
    }

    /**
     * Set the val cp bulletin.
     *
     * @param bool $valCpBulletin The val cp bulletin.
     */
    public function setValCpBulletin($valCpBulletin) {
        $this->valCpBulletin = $valCpBulletin;
        return $this;
    }
}
