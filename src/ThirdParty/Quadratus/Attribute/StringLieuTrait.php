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
 * Lieu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuTrait {

    /**
     * Lieu.
     *
     * @var string
     */
    private $lieu;

    /**
     * Get the lieu.
     *
     * @return string Returns the lieu.
     */
    public function getLieu() {
        return $this->lieu;
    }

    /**
     * Set the lieu.
     *
     * @param string $lieu The lieu.
     */
    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }
}
