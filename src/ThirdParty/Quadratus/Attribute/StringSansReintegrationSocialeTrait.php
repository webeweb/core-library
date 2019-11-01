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
 * Sans reintegration sociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSansReintegrationSocialeTrait {

    /**
     * Sans reintegration sociale.
     *
     * @var string
     */
    private $sansReintegrationSociale;

    /**
     * Get the sans reintegration sociale.
     *
     * @return string Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale() {
        return $this->sansReintegrationSociale;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param string $sansReintegrationSociale The sans reintegration sociale.
     */
    public function setSansReintegrationSociale($sansReintegrationSociale) {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }
}
