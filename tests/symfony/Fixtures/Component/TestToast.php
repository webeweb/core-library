<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Component;

use WBW\Library\Symfony\Component\AbstractToast;
use WBW\Library\Symfony\Component\ToastInterface;

/**
 * Test toast.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Component
 */
class TestToast extends AbstractToast {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("t", "c");
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): ToastInterface {
        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): ToastInterface {
        return parent::setType($type);
    }
}
