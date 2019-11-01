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
 * Code organisme mutuelle dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeMutuelleDadsuTrait {

    /**
     * Code organisme mutuelle dadsu.
     *
     * @var string
     */
    private $codeOrganismeMutuelleDadsu;

    /**
     * Get the code organisme mutuelle dadsu.
     *
     * @return string Returns the code organisme mutuelle dadsu.
     */
    public function getCodeOrganismeMutuelleDadsu() {
        return $this->codeOrganismeMutuelleDadsu;
    }

    /**
     * Set the code organisme mutuelle dadsu.
     *
     * @param string $codeOrganismeMutuelleDadsu The code organisme mutuelle dadsu.
     */
    public function setCodeOrganismeMutuelleDadsu($codeOrganismeMutuelleDadsu) {
        $this->codeOrganismeMutuelleDadsu = $codeOrganismeMutuelleDadsu;
        return $this;
    }
}
