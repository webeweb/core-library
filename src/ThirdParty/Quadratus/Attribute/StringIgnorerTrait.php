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
 * Ignorer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIgnorerTrait {

    /**
     * Ignorer.
     *
     * @var string
     */
    private $ignorer;

    /**
     * Get the ignorer.
     *
     * @return string Returns the ignorer.
     */
    public function getIgnorer() {
        return $this->ignorer;
    }

    /**
     * Set the ignorer.
     *
     * @param string $ignorer The ignorer.
     */
    public function setIgnorer($ignorer) {
        $this->ignorer = $ignorer;
        return $this;
    }
}
