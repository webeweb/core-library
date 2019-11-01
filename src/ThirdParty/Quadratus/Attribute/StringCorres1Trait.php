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
 * Corres1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres1Trait {

    /**
     * Corres1.
     *
     * @var string
     */
    private $corres1;

    /**
     * Get the corres1.
     *
     * @return string Returns the corres1.
     */
    public function getCorres1() {
        return $this->corres1;
    }

    /**
     * Set the corres1.
     *
     * @param string $corres1 The corres1.
     */
    public function setCorres1($corres1) {
        $this->corres1 = $corres1;
        return $this;
    }
}
