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
 * Cle alpha trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAlphaTrait {

    /**
     * Cle alpha.
     *
     * @var string
     */
    private $cleAlpha;

    /**
     * Get the cle alpha.
     *
     * @return string Returns the cle alpha.
     */
    public function getCleAlpha() {
        return $this->cleAlpha;
    }

    /**
     * Set the cle alpha.
     *
     * @param string $cleAlpha The cle alpha.
     */
    public function setCleAlpha($cleAlpha) {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }
}
