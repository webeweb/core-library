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
 * Tva cpt dom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptDomTrait {

    /**
     * Tva cpt dom.
     *
     * @var string
     */
    private $tvaCptDom;

    /**
     * Get the tva cpt dom.
     *
     * @return string Returns the tva cpt dom.
     */
    public function getTvaCptDom() {
        return $this->tvaCptDom;
    }

    /**
     * Set the tva cpt dom.
     *
     * @param string $tvaCptDom The tva cpt dom.
     */
    public function setTvaCptDom($tvaCptDom) {
        $this->tvaCptDom = $tvaCptDom;
        return $this;
    }
}
