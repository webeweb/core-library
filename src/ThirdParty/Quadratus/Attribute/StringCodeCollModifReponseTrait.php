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
 * Code coll modif reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollModifReponseTrait {

    /**
     * Code coll modif reponse.
     *
     * @var string
     */
    private $codeCollModifReponse;

    /**
     * Get the code coll modif reponse.
     *
     * @return string Returns the code coll modif reponse.
     */
    public function getCodeCollModifReponse() {
        return $this->codeCollModifReponse;
    }

    /**
     * Set the code coll modif reponse.
     *
     * @param string $codeCollModifReponse The code coll modif reponse.
     */
    public function setCodeCollModifReponse($codeCollModifReponse) {
        $this->codeCollModifReponse = $codeCollModifReponse;
        return $this;
    }
}
