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
 * Corres2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres2Trait {

    /**
     * Corres2.
     *
     * @var string
     */
    private $corres2;

    /**
     * Get the corres2.
     *
     * @return string Returns the corres2.
     */
    public function getCorres2() {
        return $this->corres2;
    }

    /**
     * Set the corres2.
     *
     * @param string $corres2 The corres2.
     */
    public function setCorres2($corres2) {
        $this->corres2 = $corres2;
        return $this;
    }
}
