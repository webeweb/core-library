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
 * Num chrono bo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumChronoBoTrait {

    /**
     * Num chrono bo.
     *
     * @var int
     */
    private $numChronoBo;

    /**
     * Get the num chrono bo.
     *
     * @return int Returns the num chrono bo.
     */
    public function getNumChronoBo() {
        return $this->numChronoBo;
    }

    /**
     * Set the num chrono bo.
     *
     * @param int $numChronoBo The num chrono bo.
     */
    public function setNumChronoBo($numChronoBo) {
        $this->numChronoBo = $numChronoBo;
        return $this;
    }
}
