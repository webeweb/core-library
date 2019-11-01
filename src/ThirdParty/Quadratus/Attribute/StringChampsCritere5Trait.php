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
 * Champs critere5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere5Trait {

    /**
     * Champs critere5.
     *
     * @var string
     */
    private $champsCritere5;

    /**
     * Get the champs critere5.
     *
     * @return string Returns the champs critere5.
     */
    public function getChampsCritere5() {
        return $this->champsCritere5;
    }

    /**
     * Set the champs critere5.
     *
     * @param string $champsCritere5 The champs critere5.
     */
    public function setChampsCritere5($champsCritere5) {
        $this->champsCritere5 = $champsCritere5;
        return $this;
    }
}
