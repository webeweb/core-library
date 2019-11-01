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
 * Occasionnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOccasionnelTrait {

    /**
     * Occasionnel.
     *
     * @var bool
     */
    private $occasionnel;

    /**
     * Get the occasionnel.
     *
     * @return bool Returns the occasionnel.
     */
    public function getOccasionnel() {
        return $this->occasionnel;
    }

    /**
     * Set the occasionnel.
     *
     * @param bool $occasionnel The occasionnel.
     */
    public function setOccasionnel($occasionnel) {
        $this->occasionnel = $occasionnel;
        return $this;
    }
}
