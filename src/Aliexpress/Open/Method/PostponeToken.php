<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 14.08.15
 * Time: 19:06
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class PostponeToken extends Method
{
    protected $scheme = Api::HTTPS_SCHEME;
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/system.oauth2/postponeToken';

    /**
     * @var int
     * @NotBlank
     */
    private $client_id;
    /**
     * @var string
     * @NotBlank
     */
    private $client_secret;
    /**
     * @var string
     * @NotBlank
     */
    private $refresh_token;
    /**
     * @var string
     * @NotBlank
     */
    private $access_token;
}