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
 * Das2 commentaire lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDas2CommentaireLibTrait {

    /**
     * Das2 commentaire lib.
     *
     * @var string
     */
    private $das2CommentaireLib;

    /**
     * Get the das2 commentaire lib.
     *
     * @return string Returns the das2 commentaire lib.
     */
    public function getDas2CommentaireLib() {
        return $this->das2CommentaireLib;
    }

    /**
     * Set the das2 commentaire lib.
     *
     * @param string $das2CommentaireLib The das2 commentaire lib.
     */
    public function setDas2CommentaireLib($das2CommentaireLib) {
        $this->das2CommentaireLib = $das2CommentaireLib;
        return $this;
    }
}
