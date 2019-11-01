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
 * Rubrique bilan2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRubriqueBilan2Trait {

    /**
     * Rubrique bilan2.
     *
     * @var string
     */
    private $rubriqueBilan2;

    /**
     * Get the rubrique bilan2.
     *
     * @return string Returns the rubrique bilan2.
     */
    public function getRubriqueBilan2() {
        return $this->rubriqueBilan2;
    }

    /**
     * Set the rubrique bilan2.
     *
     * @param string $rubriqueBilan2 The rubrique bilan2.
     */
    public function setRubriqueBilan2($rubriqueBilan2) {
        $this->rubriqueBilan2 = $rubriqueBilan2;
        return $this;
    }
}
