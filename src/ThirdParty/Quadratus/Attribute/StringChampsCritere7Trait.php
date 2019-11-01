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
 * Champs critere7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere7Trait {

    /**
     * Champs critere7.
     *
     * @var string
     */
    private $champsCritere7;

    /**
     * Get the champs critere7.
     *
     * @return string Returns the champs critere7.
     */
    public function getChampsCritere7() {
        return $this->champsCritere7;
    }

    /**
     * Set the champs critere7.
     *
     * @param string $champsCritere7 The champs critere7.
     */
    public function setChampsCritere7($champsCritere7) {
        $this->champsCritere7 = $champsCritere7;
        return $this;
    }
}
