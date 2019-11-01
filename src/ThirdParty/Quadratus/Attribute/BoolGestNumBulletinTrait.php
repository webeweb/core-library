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
 * Gest num bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestNumBulletinTrait {

    /**
     * Gest num bulletin.
     *
     * @var bool
     */
    private $gestNumBulletin;

    /**
     * Get the gest num bulletin.
     *
     * @return bool Returns the gest num bulletin.
     */
    public function getGestNumBulletin() {
        return $this->gestNumBulletin;
    }

    /**
     * Set the gest num bulletin.
     *
     * @param bool $gestNumBulletin The gest num bulletin.
     */
    public function setGestNumBulletin($gestNumBulletin) {
        $this->gestNumBulletin = $gestNumBulletin;
        return $this;
    }
}
