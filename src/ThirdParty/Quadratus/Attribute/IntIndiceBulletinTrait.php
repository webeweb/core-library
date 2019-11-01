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
 * Indice bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceBulletinTrait {

    /**
     * Indice bulletin.
     *
     * @var int
     */
    private $indiceBulletin;

    /**
     * Get the indice bulletin.
     *
     * @return int Returns the indice bulletin.
     */
    public function getIndiceBulletin() {
        return $this->indiceBulletin;
    }

    /**
     * Set the indice bulletin.
     *
     * @param int $indiceBulletin The indice bulletin.
     */
    public function setIndiceBulletin($indiceBulletin) {
        $this->indiceBulletin = $indiceBulletin;
        return $this;
    }
}
