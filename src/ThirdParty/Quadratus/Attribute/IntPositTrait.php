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
 * Posit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPositTrait {

    /**
     * Posit.
     *
     * @var int
     */
    private $posit;

    /**
     * Get the posit.
     *
     * @return int Returns the posit.
     */
    public function getPosit() {
        return $this->posit;
    }

    /**
     * Set the posit.
     *
     * @param int $posit The posit.
     */
    public function setPosit($posit) {
        $this->posit = $posit;
        return $this;
    }
}
