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
 * Multi dossiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiDossiersTrait {

    /**
     * Multi dossiers.
     *
     * @var bool
     */
    private $multiDossiers;

    /**
     * Get the multi dossiers.
     *
     * @return bool Returns the multi dossiers.
     */
    public function getMultiDossiers() {
        return $this->multiDossiers;
    }

    /**
     * Set the multi dossiers.
     *
     * @param bool $multiDossiers The multi dossiers.
     */
    public function setMultiDossiers($multiDossiers) {
        $this->multiDossiers = $multiDossiers;
        return $this;
    }
}
