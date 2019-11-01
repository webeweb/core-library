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
 * Revision annuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRevisionAnnuelleTrait {

    /**
     * Revision annuelle.
     *
     * @var bool
     */
    private $revisionAnnuelle;

    /**
     * Get the revision annuelle.
     *
     * @return bool Returns the revision annuelle.
     */
    public function getRevisionAnnuelle() {
        return $this->revisionAnnuelle;
    }

    /**
     * Set the revision annuelle.
     *
     * @param bool $revisionAnnuelle The revision annuelle.
     */
    public function setRevisionAnnuelle($revisionAnnuelle) {
        $this->revisionAnnuelle = $revisionAnnuelle;
        return $this;
    }
}
