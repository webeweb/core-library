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
 * Corres4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres4Trait {

    /**
     * Corres4.
     *
     * @var string
     */
    private $corres4;

    /**
     * Get the corres4.
     *
     * @return string Returns the corres4.
     */
    public function getCorres4() {
        return $this->corres4;
    }

    /**
     * Set the corres4.
     *
     * @param string $corres4 The corres4.
     */
    public function setCorres4($corres4) {
        $this->corres4 = $corres4;
        return $this;
    }
}
