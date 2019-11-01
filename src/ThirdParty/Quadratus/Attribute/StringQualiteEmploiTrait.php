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
 * Qualite emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualiteEmploiTrait {

    /**
     * Qualite emploi.
     *
     * @var string
     */
    private $qualiteEmploi;

    /**
     * Get the qualite emploi.
     *
     * @return string Returns the qualite emploi.
     */
    public function getQualiteEmploi() {
        return $this->qualiteEmploi;
    }

    /**
     * Set the qualite emploi.
     *
     * @param string $qualiteEmploi The qualite emploi.
     */
    public function setQualiteEmploi($qualiteEmploi) {
        $this->qualiteEmploi = $qualiteEmploi;
        return $this;
    }
}
