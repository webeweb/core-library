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
 * Famille5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille5Trait {

    /**
     * Famille5.
     *
     * @var string
     */
    private $famille5;

    /**
     * Get the famille5.
     *
     * @return string Returns the famille5.
     */
    public function getFamille5() {
        return $this->famille5;
    }

    /**
     * Set the famille5.
     *
     * @param string $famille5 The famille5.
     */
    public function setFamille5($famille5) {
        $this->famille5 = $famille5;
        return $this;
    }
}
