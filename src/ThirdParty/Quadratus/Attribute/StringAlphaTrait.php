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
 * Alpha trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAlphaTrait {

    /**
     * Alpha.
     *
     * @var string
     */
    private $alpha;

    /**
     * Get the alpha.
     *
     * @return string Returns the alpha.
     */
    public function getAlpha() {
        return $this->alpha;
    }

    /**
     * Set the alpha.
     *
     * @param string $alpha The alpha.
     */
    public function setAlpha($alpha) {
        $this->alpha = $alpha;
        return $this;
    }
}
