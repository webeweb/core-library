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
 * Cas part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCasPartTrait {

    /**
     * Cas part.
     *
     * @var string
     */
    private $casPart;

    /**
     * Get the cas part.
     *
     * @return string Returns the cas part.
     */
    public function getCasPart() {
        return $this->casPart;
    }

    /**
     * Set the cas part.
     *
     * @param string $casPart The cas part.
     */
    public function setCasPart($casPart) {
        $this->casPart = $casPart;
        return $this;
    }
}
