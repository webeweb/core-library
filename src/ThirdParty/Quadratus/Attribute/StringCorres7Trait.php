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
 * Corres7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres7Trait {

    /**
     * Corres7.
     *
     * @var string
     */
    private $corres7;

    /**
     * Get the corres7.
     *
     * @return string Returns the corres7.
     */
    public function getCorres7() {
        return $this->corres7;
    }

    /**
     * Set the corres7.
     *
     * @param string $corres7 The corres7.
     */
    public function setCorres7($corres7) {
        $this->corres7 = $corres7;
        return $this;
    }
}
