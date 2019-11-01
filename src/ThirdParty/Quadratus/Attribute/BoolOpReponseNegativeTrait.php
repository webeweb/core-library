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
 * Op reponse negative trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpReponseNegativeTrait {

    /**
     * Op reponse negative.
     *
     * @var bool
     */
    private $opReponseNegative;

    /**
     * Get the op reponse negative.
     *
     * @return bool Returns the op reponse negative.
     */
    public function getOpReponseNegative() {
        return $this->opReponseNegative;
    }

    /**
     * Set the op reponse negative.
     *
     * @param bool $opReponseNegative The op reponse negative.
     */
    public function setOpReponseNegative($opReponseNegative) {
        $this->opReponseNegative = $opReponseNegative;
        return $this;
    }
}
