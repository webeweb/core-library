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
 * No affiliation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoAffiliationTrait {

    /**
     * No affiliation.
     *
     * @var string
     */
    private $noAffiliation;

    /**
     * Get the no affiliation.
     *
     * @return string Returns the no affiliation.
     */
    public function getNoAffiliation() {
        return $this->noAffiliation;
    }

    /**
     * Set the no affiliation.
     *
     * @param string $noAffiliation The no affiliation.
     */
    public function setNoAffiliation($noAffiliation) {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }
}
