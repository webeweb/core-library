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
 * Sous dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSousDossierTrait {

    /**
     * Sous dossier.
     *
     * @var string
     */
    private $sousDossier;

    /**
     * Get the sous dossier.
     *
     * @return string Returns the sous dossier.
     */
    public function getSousDossier() {
        return $this->sousDossier;
    }

    /**
     * Set the sous dossier.
     *
     * @param string $sousDossier The sous dossier.
     */
    public function setSousDossier($sousDossier) {
        $this->sousDossier = $sousDossier;
        return $this;
    }
}
