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
 * Num col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumColTrait {

    /**
     * Num col.
     *
     * @var string
     */
    private $numCol;

    /**
     * Get the num col.
     *
     * @return string Returns the num col.
     */
    public function getNumCol() {
        return $this->numCol;
    }

    /**
     * Set the num col.
     *
     * @param string $numCol The num col.
     */
    public function setNumCol($numCol) {
        $this->numCol = $numCol;
        return $this;
    }
}
