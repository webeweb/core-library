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
 * Interim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterimTrait {

    /**
     * Interim.
     *
     * @var bool
     */
    private $interim;

    /**
     * Get the interim.
     *
     * @return bool Returns the interim.
     */
    public function getInterim() {
        return $this->interim;
    }

    /**
     * Set the interim.
     *
     * @param bool $interim The interim.
     */
    public function setInterim($interim) {
        $this->interim = $interim;
        return $this;
    }
}
