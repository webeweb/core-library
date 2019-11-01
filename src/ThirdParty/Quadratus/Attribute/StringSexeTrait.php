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
 * Sexe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSexeTrait {

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

    /**
     * Get the sexe.
     *
     * @return string Returns the sexe.
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }
}
