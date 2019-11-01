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
 * Droit param emails confidentiels trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitParamEmailsConfidentielsTrait {

    /**
     * Droit param emails confidentiels.
     *
     * @var bool
     */
    private $droitParamEmailsConfidentiels;

    /**
     * Get the droit param emails confidentiels.
     *
     * @return bool Returns the droit param emails confidentiels.
     */
    public function getDroitParamEmailsConfidentiels() {
        return $this->droitParamEmailsConfidentiels;
    }

    /**
     * Set the droit param emails confidentiels.
     *
     * @param bool $droitParamEmailsConfidentiels The droit param emails confidentiels.
     */
    public function setDroitParamEmailsConfidentiels($droitParamEmailsConfidentiels) {
        $this->droitParamEmailsConfidentiels = $droitParamEmailsConfidentiels;
        return $this;
    }
}
