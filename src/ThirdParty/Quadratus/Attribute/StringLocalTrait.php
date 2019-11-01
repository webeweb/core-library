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
 * Local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLocalTrait {

    /**
     * Local.
     *
     * @var string
     */
    private $local;

    /**
     * Get the local.
     *
     * @return string Returns the local.
     */
    public function getLocal() {
        return $this->local;
    }

    /**
     * Set the local.
     *
     * @param string $local The local.
     */
    public function setLocal($local) {
        $this->local = $local;
        return $this;
    }
}
