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
 * Num ligne bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigneBulletinTrait {

    /**
     * Num ligne bulletin.
     *
     * @var int
     */
    private $numLigneBulletin;

    /**
     * Get the num ligne bulletin.
     *
     * @return int Returns the num ligne bulletin.
     */
    public function getNumLigneBulletin() {
        return $this->numLigneBulletin;
    }

    /**
     * Set the num ligne bulletin.
     *
     * @param int $numLigneBulletin The num ligne bulletin.
     */
    public function setNumLigneBulletin($numLigneBulletin) {
        $this->numLigneBulletin = $numLigneBulletin;
        return $this;
    }
}
