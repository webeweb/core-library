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
 * Code coll reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollReponseTrait {

    /**
     * Code coll reponse.
     *
     * @var string
     */
    private $codeCollReponse;

    /**
     * Get the code coll reponse.
     *
     * @return string Returns the code coll reponse.
     */
    public function getCodeCollReponse() {
        return $this->codeCollReponse;
    }

    /**
     * Set the code coll reponse.
     *
     * @param string $codeCollReponse The code coll reponse.
     */
    public function setCodeCollReponse($codeCollReponse) {
        $this->codeCollReponse = $codeCollReponse;
        return $this;
    }
}
