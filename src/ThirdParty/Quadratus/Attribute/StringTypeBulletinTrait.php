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
 * Type bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBulletinTrait {

    /**
     * Type bulletin.
     *
     * @var string
     */
    private $typeBulletin;

    /**
     * Get the type bulletin.
     *
     * @return string Returns the type bulletin.
     */
    public function getTypeBulletin() {
        return $this->typeBulletin;
    }

    /**
     * Set the type bulletin.
     *
     * @param string $typeBulletin The type bulletin.
     */
    public function setTypeBulletin($typeBulletin) {
        $this->typeBulletin = $typeBulletin;
        return $this;
    }
}
