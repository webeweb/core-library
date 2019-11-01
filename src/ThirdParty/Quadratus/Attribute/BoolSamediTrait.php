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
 * Samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSamediTrait {

    /**
     * Samedi.
     *
     * @var bool
     */
    private $samedi;

    /**
     * Get the samedi.
     *
     * @return bool Returns the samedi.
     */
    public function getSamedi() {
        return $this->samedi;
    }

    /**
     * Set the samedi.
     *
     * @param bool $samedi The samedi.
     */
    public function setSamedi($samedi) {
        $this->samedi = $samedi;
        return $this;
    }
}
