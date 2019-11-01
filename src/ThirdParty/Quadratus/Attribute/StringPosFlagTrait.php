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
 * Pos flag trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPosFlagTrait {

    /**
     * Pos flag.
     *
     * @var string
     */
    private $posFlag;

    /**
     * Get the pos flag.
     *
     * @return string Returns the pos flag.
     */
    public function getPosFlag() {
        return $this->posFlag;
    }

    /**
     * Set the pos flag.
     *
     * @param string $posFlag The pos flag.
     */
    public function setPosFlag($posFlag) {
        $this->posFlag = $posFlag;
        return $this;
    }
}
