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
 * Txt reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTxtReponseTrait {

    /**
     * Txt reponse.
     *
     * @var string
     */
    private $txtReponse;

    /**
     * Get the txt reponse.
     *
     * @return string Returns the txt reponse.
     */
    public function getTxtReponse() {
        return $this->txtReponse;
    }

    /**
     * Set the txt reponse.
     *
     * @param string $txtReponse The txt reponse.
     */
    public function setTxtReponse($txtReponse) {
        $this->txtReponse = $txtReponse;
        return $this;
    }
}
