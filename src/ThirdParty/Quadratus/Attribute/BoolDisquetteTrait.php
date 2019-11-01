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
 * Disquette trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDisquetteTrait {

    /**
     * Disquette.
     *
     * @var bool
     */
    private $disquette;

    /**
     * Get the disquette.
     *
     * @return bool Returns the disquette.
     */
    public function getDisquette() {
        return $this->disquette;
    }

    /**
     * Set the disquette.
     *
     * @param bool $disquette The disquette.
     */
    public function setDisquette($disquette) {
        $this->disquette = $disquette;
        return $this;
    }
}
