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
 * Famille10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille10Trait {

    /**
     * Famille10.
     *
     * @var string
     */
    private $famille10;

    /**
     * Get the famille10.
     *
     * @return string Returns the famille10.
     */
    public function getFamille10() {
        return $this->famille10;
    }

    /**
     * Set the famille10.
     *
     * @param string $famille10 The famille10.
     */
    public function setFamille10($famille10) {
        $this->famille10 = $famille10;
        return $this;
    }
}
