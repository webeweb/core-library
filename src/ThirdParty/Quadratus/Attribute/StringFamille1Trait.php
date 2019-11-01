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
 * Famille1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille1Trait {

    /**
     * Famille1.
     *
     * @var string
     */
    private $famille1;

    /**
     * Get the famille1.
     *
     * @return string Returns the famille1.
     */
    public function getFamille1() {
        return $this->famille1;
    }

    /**
     * Set the famille1.
     *
     * @param string $famille1 The famille1.
     */
    public function setFamille1($famille1) {
        $this->famille1 = $famille1;
        return $this;
    }
}
