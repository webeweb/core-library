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
 * Fs compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsComptaTrait {

    /**
     * Fs compta.
     *
     * @var string
     */
    private $fsCompta;

    /**
     * Get the fs compta.
     *
     * @return string Returns the fs compta.
     */
    public function getFsCompta() {
        return $this->fsCompta;
    }

    /**
     * Set the fs compta.
     *
     * @param string $fsCompta The fs compta.
     */
    public function setFsCompta($fsCompta) {
        $this->fsCompta = $fsCompta;
        return $this;
    }
}
