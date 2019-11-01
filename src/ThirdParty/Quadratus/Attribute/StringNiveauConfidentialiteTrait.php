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
 * Niveau confidentialite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauConfidentialiteTrait {

    /**
     * Niveau confidentialite.
     *
     * @var string
     */
    private $niveauConfidentialite;

    /**
     * Get the niveau confidentialite.
     *
     * @return string Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite() {
        return $this->niveauConfidentialite;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string $niveauConfidentialite The niveau confidentialite.
     */
    public function setNiveauConfidentialite($niveauConfidentialite) {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }
}
