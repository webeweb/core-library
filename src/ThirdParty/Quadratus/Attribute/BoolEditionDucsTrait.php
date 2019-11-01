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
 * Edition ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionDucsTrait {

    /**
     * Edition ducs.
     *
     * @var bool
     */
    private $editionDucs;

    /**
     * Get the edition ducs.
     *
     * @return bool Returns the edition ducs.
     */
    public function getEditionDucs() {
        return $this->editionDucs;
    }

    /**
     * Set the edition ducs.
     *
     * @param bool $editionDucs The edition ducs.
     */
    public function setEditionDucs($editionDucs) {
        $this->editionDucs = $editionDucs;
        return $this;
    }
}
