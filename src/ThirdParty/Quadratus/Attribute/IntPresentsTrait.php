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
 * Presents trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPresentsTrait {

    /**
     * Presents.
     *
     * @var int
     */
    private $presents;

    /**
     * Get the presents.
     *
     * @return int Returns the presents.
     */
    public function getPresents() {
        return $this->presents;
    }

    /**
     * Set the presents.
     *
     * @param int $presents The presents.
     */
    public function setPresents($presents) {
        $this->presents = $presents;
        return $this;
    }
}
