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
 * Corres5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres5Trait {

    /**
     * Corres5.
     *
     * @var string
     */
    private $corres5;

    /**
     * Get the corres5.
     *
     * @return string Returns the corres5.
     */
    public function getCorres5() {
        return $this->corres5;
    }

    /**
     * Set the corres5.
     *
     * @param string $corres5 The corres5.
     */
    public function setCorres5($corres5) {
        $this->corres5 = $corres5;
        return $this;
    }
}
