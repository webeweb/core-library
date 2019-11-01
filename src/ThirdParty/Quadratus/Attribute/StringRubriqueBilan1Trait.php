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
 * Rubrique bilan1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRubriqueBilan1Trait {

    /**
     * Rubrique bilan1.
     *
     * @var string
     */
    private $rubriqueBilan1;

    /**
     * Get the rubrique bilan1.
     *
     * @return string Returns the rubrique bilan1.
     */
    public function getRubriqueBilan1() {
        return $this->rubriqueBilan1;
    }

    /**
     * Set the rubrique bilan1.
     *
     * @param string $rubriqueBilan1 The rubrique bilan1.
     */
    public function setRubriqueBilan1($rubriqueBilan1) {
        $this->rubriqueBilan1 = $rubriqueBilan1;
        return $this;
    }
}
