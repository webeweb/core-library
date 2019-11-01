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
 * i key trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringiKeyTrait {

    /**
     * i key.
     *
     * @var string
     */
    private $iKey;

    /**
     * Get the i key.
     *
     * @return string Returns the i key.
     */
    public function getiKey() {
        return $this->iKey;
    }

    /**
     * Set the i key.
     *
     * @param string $iKey The i key.
     */
    public function setiKey($iKey) {
        $this->iKey = $iKey;
        return $this;
    }
}
