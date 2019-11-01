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
 * Fsgi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsgiTrait {

    /**
     * Fsgi.
     *
     * @var string
     */
    private $fsgi;

    /**
     * Get the fsgi.
     *
     * @return string Returns the fsgi.
     */
    public function getFsgi() {
        return $this->fsgi;
    }

    /**
     * Set the fsgi.
     *
     * @param string $fsgi The fsgi.
     */
    public function setFsgi($fsgi) {
        $this->fsgi = $fsgi;
        return $this;
    }
}
