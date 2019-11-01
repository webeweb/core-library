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
 * Tva cle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCleTrait {

    /**
     * Tva cle.
     *
     * @var string
     */
    private $tvaCle;

    /**
     * Get the tva cle.
     *
     * @return string Returns the tva cle.
     */
    public function getTvaCle() {
        return $this->tvaCle;
    }

    /**
     * Set the tva cle.
     *
     * @param string $tvaCle The tva cle.
     */
    public function setTvaCle($tvaCle) {
        $this->tvaCle = $tvaCle;
        return $this;
    }
}
