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
 * Corres8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorres8Trait {

    /**
     * Corres8.
     *
     * @var string
     */
    private $corres8;

    /**
     * Get the corres8.
     *
     * @return string Returns the corres8.
     */
    public function getCorres8() {
        return $this->corres8;
    }

    /**
     * Set the corres8.
     *
     * @param string $corres8 The corres8.
     */
    public function setCorres8($corres8) {
        $this->corres8 = $corres8;
        return $this;
    }
}
