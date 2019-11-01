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
 * Radical compte frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRadicalCompteFrnTrait {

    /**
     * Radical compte frn.
     *
     * @var string
     */
    private $radicalCompteFrn;

    /**
     * Get the radical compte frn.
     *
     * @return string Returns the radical compte frn.
     */
    public function getRadicalCompteFrn() {
        return $this->radicalCompteFrn;
    }

    /**
     * Set the radical compte frn.
     *
     * @param string $radicalCompteFrn The radical compte frn.
     */
    public function setRadicalCompteFrn($radicalCompteFrn) {
        $this->radicalCompteFrn = $radicalCompteFrn;
        return $this;
    }
}
