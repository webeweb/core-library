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
 * Edition base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionBaseTrait {

    /**
     * Edition base.
     *
     * @var bool
     */
    private $editionBase;

    /**
     * Get the edition base.
     *
     * @return bool Returns the edition base.
     */
    public function getEditionBase() {
        return $this->editionBase;
    }

    /**
     * Set the edition base.
     *
     * @param bool $editionBase The edition base.
     */
    public function setEditionBase($editionBase) {
        $this->editionBase = $editionBase;
        return $this;
    }
}
