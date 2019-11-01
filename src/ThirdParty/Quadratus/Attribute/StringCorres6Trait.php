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
 * Corres6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres6Trait {

    /**
     * Corres6.
     *
     * @var string
     */
    private $corres6;

    /**
     * Get the corres6.
     *
     * @return string Returns the corres6.
     */
    public function getCorres6() {
        return $this->corres6;
    }

    /**
     * Set the corres6.
     *
     * @param string $corres6 The corres6.
     */
    public function setCorres6($corres6) {
        $this->corres6 = $corres6;
        return $this;
    }
}
