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
 * Champ trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampTrait {

    /**
     * Champ.
     *
     * @var string
     */
    private $champ;

    /**
     * Get the champ.
     *
     * @return string Returns the champ.
     */
    public function getChamp() {
        return $this->champ;
    }

    /**
     * Set the champ.
     *
     * @param string $champ The champ.
     */
    public function setChamp($champ) {
        $this->champ = $champ;
        return $this;
    }
}
