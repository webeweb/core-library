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
 * Exclure loi tepa part p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureLoiTepaPartPTrait {

    /**
     * Exclure loi tepa part p.
     *
     * @var bool
     */
    private $exclureLoiTepaPartP;

    /**
     * Get the exclure loi tepa part p.
     *
     * @return bool Returns the exclure loi tepa part p.
     */
    public function getExclureLoiTepaPartP() {
        return $this->exclureLoiTepaPartP;
    }

    /**
     * Set the exclure loi tepa part p.
     *
     * @param bool $exclureLoiTepaPartP The exclure loi tepa part p.
     */
    public function setExclureLoiTepaPartP($exclureLoiTepaPartP) {
        $this->exclureLoiTepaPartP = $exclureLoiTepaPartP;
        return $this;
    }
}
