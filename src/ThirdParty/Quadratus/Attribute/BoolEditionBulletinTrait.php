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
 * Edition bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionBulletinTrait {

    /**
     * Edition bulletin.
     *
     * @var bool
     */
    private $editionBulletin;

    /**
     * Get the edition bulletin.
     *
     * @return bool Returns the edition bulletin.
     */
    public function getEditionBulletin() {
        return $this->editionBulletin;
    }

    /**
     * Set the edition bulletin.
     *
     * @param bool $editionBulletin The edition bulletin.
     */
    public function setEditionBulletin($editionBulletin) {
        $this->editionBulletin = $editionBulletin;
        return $this;
    }
}
