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
 * Txt commentaire rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTxtCommentaireRtfTrait {

    /**
     * Txt commentaire rtf.
     *
     * @var string
     */
    private $txtCommentaireRtf;

    /**
     * Get the txt commentaire rtf.
     *
     * @return string Returns the txt commentaire rtf.
     */
    public function getTxtCommentaireRtf() {
        return $this->txtCommentaireRtf;
    }

    /**
     * Set the txt commentaire rtf.
     *
     * @param string $txtCommentaireRtf The txt commentaire rtf.
     */
    public function setTxtCommentaireRtf($txtCommentaireRtf) {
        $this->txtCommentaireRtf = $txtCommentaireRtf;
        return $this;
    }
}
