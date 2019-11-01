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
 * Num certification sociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCertificationSocialeTrait {

    /**
     * Num certification sociale.
     *
     * @var string
     */
    private $numCertificationSociale;

    /**
     * Get the num certification sociale.
     *
     * @return string Returns the num certification sociale.
     */
    public function getNumCertificationSociale() {
        return $this->numCertificationSociale;
    }

    /**
     * Set the num certification sociale.
     *
     * @param string $numCertificationSociale The num certification sociale.
     */
    public function setNumCertificationSociale($numCertificationSociale) {
        $this->numCertificationSociale = $numCertificationSociale;
        return $this;
    }
}
