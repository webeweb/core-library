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
 * Txt commentaire saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTxtCommentaireSaisiTrait {

    /**
     * Txt commentaire saisi.
     *
     * @var string
     */
    private $txtCommentaireSaisi;

    /**
     * Get the txt commentaire saisi.
     *
     * @return string Returns the txt commentaire saisi.
     */
    public function getTxtCommentaireSaisi() {
        return $this->txtCommentaireSaisi;
    }

    /**
     * Set the txt commentaire saisi.
     *
     * @param string $txtCommentaireSaisi The txt commentaire saisi.
     */
    public function setTxtCommentaireSaisi($txtCommentaireSaisi) {
        $this->txtCommentaireSaisi = $txtCommentaireSaisi;
        return $this;
    }
}
