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
 * Ne pas editer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasEditerTrait {

    /**
     * Ne pas editer.
     *
     * @var bool
     */
    private $nePasEditer;

    /**
     * Get the ne pas editer.
     *
     * @return bool Returns the ne pas editer.
     */
    public function getNePasEditer() {
        return $this->nePasEditer;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool $nePasEditer The ne pas editer.
     */
    public function setNePasEditer($nePasEditer) {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }
}
