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
 * Corres3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres3Trait {

    /**
     * Corres3.
     *
     * @var string
     */
    private $corres3;

    /**
     * Get the corres3.
     *
     * @return string Returns the corres3.
     */
    public function getCorres3() {
        return $this->corres3;
    }

    /**
     * Set the corres3.
     *
     * @param string $corres3 The corres3.
     */
    public function setCorres3($corres3) {
        $this->corres3 = $corres3;
        return $this;
    }
}
