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
 * Forme juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFormeJuridiqueTrait {

    /**
     * Forme juridique.
     *
     * @var string
     */
    private $formeJuridique;

    /**
     * Get the forme juridique.
     *
     * @return string Returns the forme juridique.
     */
    public function getFormeJuridique() {
        return $this->formeJuridique;
    }

    /**
     * Set the forme juridique.
     *
     * @param string $formeJuridique The forme juridique.
     */
    public function setFormeJuridique($formeJuridique) {
        $this->formeJuridique = $formeJuridique;
        return $this;
    }
}
