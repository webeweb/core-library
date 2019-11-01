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
 * Tva deb3 jrn exclure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaDeb3JrnExclureTrait {

    /**
     * Tva deb3 jrn exclure.
     *
     * @var string
     */
    private $tvaDeb3JrnExclure;

    /**
     * Get the tva deb3 jrn exclure.
     *
     * @return string Returns the tva deb3 jrn exclure.
     */
    public function getTvaDeb3JrnExclure() {
        return $this->tvaDeb3JrnExclure;
    }

    /**
     * Set the tva deb3 jrn exclure.
     *
     * @param string $tvaDeb3JrnExclure The tva deb3 jrn exclure.
     */
    public function setTvaDeb3JrnExclure($tvaDeb3JrnExclure) {
        $this->tvaDeb3JrnExclure = $tvaDeb3JrnExclure;
        return $this;
    }
}
