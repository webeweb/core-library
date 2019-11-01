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
 * Exclure loi tepa part s trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureLoiTepaPartSTrait {

    /**
     * Exclure loi tepa part s.
     *
     * @var bool
     */
    private $exclureLoiTepaPartS;

    /**
     * Get the exclure loi tepa part s.
     *
     * @return bool Returns the exclure loi tepa part s.
     */
    public function getExclureLoiTepaPartS() {
        return $this->exclureLoiTepaPartS;
    }

    /**
     * Set the exclure loi tepa part s.
     *
     * @param bool $exclureLoiTepaPartS The exclure loi tepa part s.
     */
    public function setExclureLoiTepaPartS($exclureLoiTepaPartS) {
        $this->exclureLoiTepaPartS = $exclureLoiTepaPartS;
        return $this;
    }
}
