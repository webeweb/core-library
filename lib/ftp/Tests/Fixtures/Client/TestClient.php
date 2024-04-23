<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests\Fixtures\Client;

use WBW\Library\Common\Security\Authenticator;
use WBW\Library\Ftp\Client\AbstractClient;
use WBW\Library\Ftp\Exception\FtpException;

/**
 * Test client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Fixtures\Client
 */
class TestClient extends AbstractClient {

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator
     */
    public function __construct(Authenticator $authenticator) {
        parent::__construct($authenticator);
    }

    /**
     * {@inheritDoc}
     */
    public function newFtpException(string $message): FtpException {
        return parent::newFtpException($message);
    }

    /**
     * {@inheritDoc}
     */
    public function setConnection($connection): AbstractClient {
        return parent::setConnection($connection);
    }
}
