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
 * Nature juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureJuridiqueTrait {

    /**
     * Nature juridique.
     *
     * @var string
     */
    private $natureJuridique;

    /**
     * Get the nature juridique.
     *
     * @return string Returns the nature juridique.
     */
    public function getNatureJuridique() {
        return $this->natureJuridique;
    }

    /**
     * Set the nature juridique.
     *
     * @param string $natureJuridique The nature juridique.
     */
    public function setNatureJuridique($natureJuridique) {
        $this->natureJuridique = $natureJuridique;
        return $this;
    }
}
