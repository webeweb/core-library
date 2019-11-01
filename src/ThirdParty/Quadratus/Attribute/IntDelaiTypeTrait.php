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
 * Delai type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiTypeTrait {

    /**
     * Delai type.
     *
     * @var int
     */
    private $delaiType;

    /**
     * Get the delai type.
     *
     * @return int Returns the delai type.
     */
    public function getDelaiType() {
        return $this->delaiType;
    }

    /**
     * Set the delai type.
     *
     * @param int $delaiType The delai type.
     */
    public function setDelaiType($delaiType) {
        $this->delaiType = $delaiType;
        return $this;
    }
}
