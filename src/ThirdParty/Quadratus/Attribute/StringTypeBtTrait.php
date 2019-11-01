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
 * Type bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBtTrait {

    /**
     * Type bt.
     *
     * @var string
     */
    private $typeBt;

    /**
     * Get the type bt.
     *
     * @return string Returns the type bt.
     */
    public function getTypeBt() {
        return $this->typeBt;
    }

    /**
     * Set the type bt.
     *
     * @param string $typeBt The type bt.
     */
    public function setTypeBt($typeBt) {
        $this->typeBt = $typeBt;
        return $this;
    }
}
