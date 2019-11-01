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
 * Code coll suivi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollSuiviTrait {

    /**
     * Code coll suivi.
     *
     * @var string
     */
    private $codeCollSuivi;

    /**
     * Get the code coll suivi.
     *
     * @return string Returns the code coll suivi.
     */
    public function getCodeCollSuivi() {
        return $this->codeCollSuivi;
    }

    /**
     * Set the code coll suivi.
     *
     * @param string $codeCollSuivi The code coll suivi.
     */
    public function setCodeCollSuivi($codeCollSuivi) {
        $this->codeCollSuivi = $codeCollSuivi;
        return $this;
    }
}
