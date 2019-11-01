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
 * Derniere version cd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDerniereVersionCdTrait {

    /**
     * Derniere version cd.
     *
     * @var string
     */
    private $derniereVersionCd;

    /**
     * Get the derniere version cd.
     *
     * @return string Returns the derniere version cd.
     */
    public function getDerniereVersionCd() {
        return $this->derniereVersionCd;
    }

    /**
     * Set the derniere version cd.
     *
     * @param string $derniereVersionCd The derniere version cd.
     */
    public function setDerniereVersionCd($derniereVersionCd) {
        $this->derniereVersionCd = $derniereVersionCd;
        return $this;
    }
}
