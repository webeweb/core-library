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
 * Origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrigineTrait {

    /**
     * Origine.
     *
     * @var string
     */
    private $origine;

    /**
     * Get the origine.
     *
     * @return string Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
    }

    /**
     * Set the origine.
     *
     * @param string $origine The origine.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }
}
