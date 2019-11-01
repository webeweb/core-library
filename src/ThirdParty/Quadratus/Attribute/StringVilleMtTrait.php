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
 * Ville mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVilleMtTrait {

    /**
     * Ville mt.
     *
     * @var string
     */
    private $villeMt;

    /**
     * Get the ville mt.
     *
     * @return string Returns the ville mt.
     */
    public function getVilleMt() {
        return $this->villeMt;
    }

    /**
     * Set the ville mt.
     *
     * @param string $villeMt The ville mt.
     */
    public function setVilleMt($villeMt) {
        $this->villeMt = $villeMt;
        return $this;
    }
}
