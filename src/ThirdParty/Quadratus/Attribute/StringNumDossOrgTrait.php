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
 * Num doss org trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossOrgTrait {

    /**
     * Num doss org.
     *
     * @var string
     */
    private $numDossOrg;

    /**
     * Get the num doss org.
     *
     * @return string Returns the num doss org.
     */
    public function getNumDossOrg() {
        return $this->numDossOrg;
    }

    /**
     * Set the num doss org.
     *
     * @param string $numDossOrg The num doss org.
     */
    public function setNumDossOrg($numDossOrg) {
        $this->numDossOrg = $numDossOrg;
        return $this;
    }
}
