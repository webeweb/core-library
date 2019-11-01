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
 * Edition date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionDateTrait {

    /**
     * Edition date.
     *
     * @var bool
     */
    private $editionDate;

    /**
     * Get the edition date.
     *
     * @return bool Returns the edition date.
     */
    public function getEditionDate() {
        return $this->editionDate;
    }

    /**
     * Set the edition date.
     *
     * @param bool $editionDate The edition date.
     */
    public function setEditionDate($editionDate) {
        $this->editionDate = $editionDate;
        return $this;
    }
}
